@extends('admin.layout.auth1')

@section('style')

<!--<link href="https://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.min.css" />
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" type="text/css" />-->
@endsection

@section('content')
        <section id="main-content">
            <section class="wrapper">
                <div class="row" style="margin-right:10px;">
                    @include('includes.messages')
                     <h1 class="page-header">
                      مشخصات عمومی چند زبانه
                    </h1>
                    
                    <div style="margin-left:100px;margin-bottom:100px;">
                        <form action="{{route('contents.store')}}" method="post" >
                            @csrf
                        @foreach($locales as $locale)
                        <?php 
                            if(!count($contents)==0){
                                $content=$contents[$loop->index];
                            }
                        ?>
                        <h3>
                            به زبان {{$locale}}
                        </h3>
                            @include('admin.content.form')
                            <hr>
                        @endforeach
                        
                        <div class="text-center">
                            <button type="submit"  class="btn btn-primary btn-lg">
                                تایید
                                </button>
                        </div>
                        </form>
                    </div> 
                </div>
            </section>
        </section>
@endsection

@section('js')
    
    <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.min.js" ></script>
    
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.css" />
    
@endsection
