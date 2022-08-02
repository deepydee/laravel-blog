@extends('admin.layouts.layout')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Новая статья</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Blank Page</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
      
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Новая статья</h3>
                            </div>
                            <form role="form" action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Название статьи</label>
                                        <input type="text" class="form-control @error('title') is-invalid   @enderror" name="title" id="title">
                                    </div>

                                    <div class="form-group">
                                      <label for="description">Краткое описание</label>
                                      <textarea class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Краткое описание ..." id="description" name="description"></textarea>
                                    </div>

                                    <div class="form-group">
                                      <label for="content">Текст статьи</label>
                                      <textarea class="form-control @error('content') is-invalid @enderror" rows="7" placeholder="Текст статьи..." id="content" name="content"></textarea>
                                    </div>

                                    <div class="form-group">
                                      <label for="category_id">Категория</label>
                                      <select class="custom-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                      @foreach ($categories as $id => $title)
                                          <option value="{{$id}}">{{$title}}</option>
                                      @endforeach
                                      </select>
                                    </div>

                                    <div class="form-group">
                                      <label for="tags">Теги</label>
                                      <select id="tags" name="tags[]" class="select2" multiple="multiple" data-placeholder="Выберите тег" style="width: 100%;">
                                        @foreach ($tags as $id => $title)
                                            <option value="{{$id}}">{{$title}}</option>
                                        @endforeach
                                      </select>
                                    </div>

                                    <div class="form-group">
                                      <label for="thumbnail">Изображение</label>
                                      <div class="input-group">
                                        <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                                        <label class="custom-file-label" for="thumbnail">Выберите изображение</label>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="card-footer">
                                         <button type="submit" class="btn btn-primary">Создать</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          
            

      
          </section>
          <!-- /.content -->
@endsection