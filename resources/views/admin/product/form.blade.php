
{{ csrf_field() }}
    <div class="form-group">
         <label for="category_id">
             دسته بندی محصول
             </label>

        <select name="category_id" id="category_id" class="form-control">
            
                <option value="">
                انتخاب دسته بندی
                </option>
            @foreach($categories as $category)
                    @if (old('category_id') == $category->id)
                          <option value="{{$category->id}}" selected>{{$category->title}}</option>
                    @elseif (isset($product))
                        @if(!empty($product->category))
                            @if($product->category->id==$category->id)
                                <option value="{{$category->id}}" selected>{{$category->title}}</option>
                            @endif
                        @else
                          <option value="{{$category->id}}">
                                {{$category->title}}
                            </option>
                        @endif
                        
                    
                    @else
                          <option value="{{$category->id}}">
                                {{$category->title}}
                            </option>
                    @endif 
                
            @endforeach
        </select>
    </div>
    @foreach(array_flip(config('translatable.locales')) as $locale)
   <?php App::setLocale($locale) ?>
    <h3>
            به زبان {{$locale}}
        </h3>
    <hr>
    <div class="row">
    <aside id="admin_sidebar" class="col-md-4">
        <div class="form-group">
               <label for="desc_short-{{$locale}}">
                 توضیح کوتاه محصول 
                </label>
          <textarea name="desc_short[]" id="desc_short-{{$locale}}" cols="30" rows="5" class="form-control" >{{isset($product)?$product->desc_short:Request::old('desc_short')}}</textarea>
        </div>


    
    </aside><!--SIDEBAR-->
    
    <div class="col-md-8">
    
    <div class="form-group">
        <label for="name-{{$locale}}">
            عنوان محصول 
        </label>
            <input type="text" name="name[]" class="form-control" id="name-{{$locale}}" value="{{isset($product)?$product->name:Request::old('name')}}" required>
           
        </div>
    
    
        <div class="form-group">
               <label for="description-{{$locale}}">
                   توضیحات محصول
                </label>
          <textarea name="description[]" id="description-{{$locale}}" cols="30" rows="10" class="form-control  my-editor" >{{isset($product)?$product->description:Request::old('description')}}</textarea>
        </div>
    
    
    
        <!--<div class="form-group row">-->
        <!--    <div class="col-xs-4">-->
        <!--    <label for="price_discount">-->
        <!--        قیمت در تخفیف ویژه-->
        <!--    </label>-->
        <!--    <input type="number" name="price_discount" id="price_discount" class="form-control" size="60" value="{{isset($product)?$product->price_discount:Request::old('price_discount')}}">-->
        <!--  </div>-->
        <!--  <div class="col-xs-4">-->
        <!--    <label for="price_sell">-->
        <!--        قیمت فروش-->
        <!--    </label>-->
        <!--    <input type="number" name="price_sell" id="price_sell" class="form-control" size="60" value="{{isset($product)?$product->price_sell:Request::old('price_sell')}}">-->
        <!--  </div>-->
        <!--  <div class="col-xs-4">-->
        <!--    <label for="price_buy">-->
        <!--        قیمت خرید-->
        <!--    </label>-->
        <!--    <input type="number" name="price_buy" id="price_buy" class="form-control" size="60"  value="{{isset($product)?$product->price_buy:Request::old('price_buy')}}">-->
        <!--  </div>-->
          
        <!--</div>-->
    
    
    
        <div class="form-group row">
              <div class="col-xs-6">
                <label for="weight_unit-{{$locale}}">
                   واحد وزن
                </label>
                <input type="text" name="weight_unit[]" id="weight_unit-{{$locale}}" class="form-control" size="60" value="{{isset($product)?$product->weight_unit:Request::old('weight_unit')}}" placeholder="گرم،کیلوگرم ، لیتر">
              </div>
              <div class="col-xs-6">
                <label for="weight">
                    وزن محصول
                </label>
                <input type="number" name="weight" id="weight" class="form-control" size="60" value="{{isset($product)?$product->weight:Request::old('weight')}}">
              </div>
              

       </div><!--Main Content-->
        <!--<div class="form-group">-->
           
        <!--        <label for="tags">-->
        <!--            برچسبها-->
        <!--        </label>-->
        <!--        <input style="text-align:right" name="tags" id="tags" value="{{isset($product)?$product->tagNames:Request::old('tags')}}" />-->
              
        <!--</div>-->
        
    </div>
    <!-- SIDEBAR-->
    
        
   
    </div>
    
    
    <hr style="height:2px;border:none;color:#333;background-color:#333;margin-top:0px">
    <input type="hidden" name="locales[]" value="{{$locale}}">
       @endforeach
       <div class="form-group text-center">
           <!--<input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">-->
            <input type="submit" name="publish" class="btn btn-primary btn-lg" value="
            تایید
            ">
        </div>
    </form>
