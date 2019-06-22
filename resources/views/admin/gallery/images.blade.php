@extends('admin.layout.auth1')
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css" type="text/css" />

@endsection

@section('content')

        <section id="main-content">
            <section class="wrapper">
                <div class="row" style="margin-right:10px;">
                    @include('includes.messages')
                     <h1 class="page-header">
                      تصاویر گالری
                      <span style="font-weight:bold">{{$gallery->title}}</span>
                    
                    </h1>
                   
                    
                    
                    <table class="table table-hover">
                        <thead>
                          <tr>
                               <th>
                                   شماره
                                </th>
                               <th>
                                   عنوان دسته بندی
                                 </th>
                               <th>
                                   تصویر
                                </th>
                               <th>
                                   حذف تصویر
                                </th>
                               <td>
                                   تصویر اول
                               </td>
                          </tr>
                        </thead>
                        
                            <?php $i=0; ?>
                            
                          @foreach($gallery->images as $image)
                             <form method="post" class="confirm-form" action="{{route('image.destroy',$image)}}" id="delete{{$image->id}}"> </form>
                             <form method="post" action="{{route('image.update',$image)}}" id="update{{$image->id}}" >
                                 <input type="hidden" name="_method" value="PATCH" form="update{{$image->id}}">
                                 <input type="hidden" name="gallery_id" form="update{{$image->id}}" value="{{$gallery->id}}">
                               </form>
                             <input type="hidden" name="_method" value="DELETE" form="delete{{$image->id}}" >
                          <tbody>
                          <?php $i=$i+1; ?>
                              <td>
                                  {{$i}}
                              </td>
                              <td>
                                  {{$gallery->title}}
                              </td>
                              
                              <td>
                                  <img style="width:70px" src="/thumbnails/{{$image->path}}"></img>
                              </td>
                              <td><button class="btn btn-danger" type="submit" form="delete{{$image->id}}">
                                   <i class="fa fa-remove" style="font-size:16px; "></i>
                               </button></td>
                               @if($image->main_image==1)
                                   <td>
                                       تصویر اصلی
                                   </td>
                               
                               @else
                               <td><button class="btn btn-success" type="submit" form="update{{$image->id}}">
                                   تبدیل به تصویر اصلی
                               </button></td>
                               @endif
                             </tbody>
                           @endforeach 
                      
                    </table>  
                    <div class="container">
                        <form id="myDropzone" method="post" action="{{route('image.store')}}"
                      class="dropzone">
                            <input type="hidden" name="gallery_id"  value="{{$gallery->id}}" />
                        </form>
                    </div>
                    
                 </div>
            </section>
        </section>
@endsection

@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.js"></script>
<script>
Dropzone.options.myDropzone = {
    acceptedFiles: '.jpg',
    init: function() {
        
        this.on("success", function() {
            location.reload();
        });
    }
};

$('form').append('{{csrf_field()}}');
</script>
@endsection