@extends('admin.layout.auth1')

@section('content')

        <section id="main-content">
            <section class="wrapper">
                <div class="row" style="margin-right:10px;">
                    @include('includes.messages')
                     <h1 class="page-header">
                       همه دسته بندی گالری
                    
                    </h1>
                    <a href="{{route('galleries.create')}}" class="btn btn-success">
                        افزودن دسته بندی جدید
                    </a>
                    
 
                    <hr>
                       
                    <table class="table table-hover">
                        <thead>
                          <tr>
                               <th>
                                   شماره
                                </th>
                               <th>
                                   عنوان
                                 </th>
                                 <th>
                                   افزودن عکس
                                 </th>
                                <th>
                                    ویرایش
                                </th>
                                <th>
                                    حذف
                                </th>
                          </tr>
                        </thead>
                        <?php $i=0; ?>
                            @foreach($galleries as $gallery)
                        <tbody>
                            
                            
                            <?php $i++; ?>
                            <form method="post" class="confirm-form" action="{{route('galleries.destroy',$gallery)}}" id="delete{{$gallery->id}}"> </form>
                            
                            
                            <input type="hidden" name="_method" value="DELETE" form="delete{{$gallery->id}}" >

                            <td>{{$i}}</td>
                            <td>{{$gallery->title}}</td>
                            
                            <td>
                                  <a class="btn btn-success" href="{{route('gallery.images',$gallery)}}">
                                      <i class="fa fa-plus"></i> </a> 
                            </td>
                            <td>
                              <a class="btn btn-info" href="{{route('galleries.edit',$gallery)}}">
                                  <i class="fa fa-edit"></i> </a> 
                            </td>
                            <td>
                                 <button class="btn btn-danger" type="submit" form="delete{{$gallery->id}}">
                                   <span class="glyphicon glyphicon-remove"></span>
                                </button> 
                            </td>
                            
                        </tbody>
                        @endforeach
                    </table>  

                    
                </div>
            </section>
        </section>
@endsection

@section('js')
<script>

    $('form').append('{{csrf_field()}}');
</script>
@endsection