@extends('layouts.back')

@section('title')
    <title>{{ config('app.name') }} | Update Gallery Images</title>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('public/back/css/dropzone.min.css') }}">
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('albums.index') }}">Gallery Images</a>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if (session('fail'))
                    <div class="alert alert-danger">
                        {{ session('fail') }}
                    </div>
                    @endif
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Update Gallery Images for Album '<b>{{ $album->name }}</b>'</h4>
                        </div>
                        <div class="content">
                            <form method="POST" action="{{ route('update.album.gallery', $album->id ) }}" id="albumForm" enctype="multipart/form-data">@csrf</form>
                            <div class="form-group row">
                                <div class="col-md-12 mb-4">
                                    <h5 class="card-title m-b10">Previous Images</h5>
                                    <div class="prevAlbumImages">
                                        <div class="row">
                                            @csrf
                                            @foreach($album->images as $image)
                                            <div class="col-md-2 album-image">
                                                <img src="{{ asset('public/img/gallery/album_'.$album->id) }}/{{ $image->url }}">
                                                <div class="edit-image-action">
                                                    <a data-imageUrl="{{ $image->url }}" class="deleteAlbumImage btn btn-sm btn-fill btn-danger"><i class="i-Close"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr>

                                    <div>
                                        <h5 class="card-title m-b10">Add New Images <small><i>click or drop images</i></small></h5>
                                        <form action="{{ route('upload.album.image', $album->id) }}" method="POST" id="dropzone" class="dropzone"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="dz-message" data-dz-message><span>Drop photos or click here to upload!</span></div>
                                        
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
                                        </form>
                                    </div>                                    
                                </div>
                                <ul id="imagesArray" style="display:none">
                                    @foreach ($album->images as $image)
                                    <li>{{$image->url}}</li>
                                    @endforeach
                                </ul>
                                <input id="images" form="albumForm" type="hidden" name="images">
                                <div class="col-md-12">
                                    <button type="submit" form="albumForm" class="btn btn-primary btn-fill m-t60">Save</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('public/back/js/dropzone.js') }}"></script>
    <script>
        var imagesArray, urlArray = [];
        imagesArray = document.getElementById("imagesArray").getElementsByTagName("li");
        for(i = 0; i < imagesArray.length; i++){ urlArray.push(imagesArray[i].textContent); $('#images').val(urlArray); }
        Dropzone.autoDiscover=false;
        $(document).ready(function() {
            $("#dropzone").dropzone({
                dictDefaultMessage: 'Drop photos or click here to upload',
                paramName: 'file',
                url: '{{ route('upload.album.image', $album->id) }}',
                clickable: true,
                enqueueForUpload: true,
                maxFilesize: 5,
                resizeWidth: 1280,
                resizeMethod: "contain",
                acceptedFiles: ".jpg,.jpeg,.png,.gif",
                uploadMultiple: false,
                addRemoveLinks: true,
                success: function (file, response) {
                    file.previewElement.id = response.image;
                    urlArray.push(response.image);
                    $('#images').val(urlArray);
                },
                removedfile: function (file) {
                    $.ajaxSetup({
                        headers: {
                                'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
                            }
                    });
                    $.ajax({
                        method: 'post',
                        url: '{{ route("ajax-removeDropzoneAlbumImage")}}?url='+file.previewElement.id+'&albumId={{$album->id}}',
                        success: function(result) {
                            if(result == 'success'){
                                var success = true;
                            }
                        },
                        error: function(request,msg,error) {
                            console.log(error);
                        }
                    });
                    if(success = true){
                        var index = urlArray.indexOf(file.previewElement.id);
                        if (index !== -1) urlArray.splice(index, 1);
                        file.previewElement.remove();
                        $('#images').val(urlArray);
                    }
                }
            });

            $("a.deleteAlbumImage").click(function(e){
                e.preventDefault();

                var url = $(this).attr('data-imageUrl');
                var albumId = $(this).attr('data-albumId');
                var el = $('img[src="{{ asset('public/img/gallery/album_'.$album->id) }}/'+url+'"]').parent();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
                    }

                });
                $.ajax({
                    method: 'post',
                    url: '{{ route("ajax-removeAlbumImage")}}?url='+url,
                    success: function(result) {
                        if(result == 'success'){
                            el.remove();
                            var index = urlArray.indexOf(url);
                            if (index !== -1) urlArray.splice(index, 1);
                            $('#images').val(urlArray);
                        }
                    },
                    error: function(request,msg,error) {
                        console.log(error);
                    }
                });
            });

            $('ul.nav>li:nth-child(3)').addClass('active');
        });
    </script>
@endsection