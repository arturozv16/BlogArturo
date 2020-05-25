@csrf
    
<div class="form-group"> 
    <label for="title">Título</label>
          {{-- <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"> --}}
          <input type="text" class="form-control" name="title" id="title" value="{{old('title', $post->title)}}">
    </div>
       <div class="form-group">
                  <label for="url_clean">Url Limpia</label>
         <input type="text" class="form-control" name="url_clean" id="url_clean" value="{{old('url_clean', $post->url_clean)}}">
               </div>
               
               <div class="form-group">
                           <label for="content">Contenido</label>
                           <textarea class="form-control" id="content" name="content" rows="3">{{old('content', $post->content)}}</textarea>   
                        </div>
<input type="submit" value="Enviar" class="btn btn-primary">