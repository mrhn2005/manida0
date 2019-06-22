<div style="margin-left:100px">
       
     <div class="form-group">
      <label for="aboutus-{{$locale}}">
          درباره ما
          </label>
        <textarea name="aboutus[]" id="aboutus-{{$locale}}"  rows="5" class="form-control" >{{isset($content)?$content->aboutus:Request::old('aboutus')}}</textarea>
    </div>
    <div class="form-group">
      <label for="address-{{$locale}}">
         آدرس:
          </label>
        <textarea name="address[]" id="address-{{$locale}}"  rows="3" class="form-control" >{{isset($content)?$content->address:Request::old('address')}}</textarea>
    </div>

    <input type="hidden" name="locales[]" value="{{$locale}}">
</div> 