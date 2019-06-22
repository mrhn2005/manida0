
 {{ csrf_field() }}
@foreach((config('translatable.locales')) as $key => $locale)
<?php App::setLocale($key) ?>
<h3>
        به زبان {{$locale}}
</h3>
<hr>
<div class="form-group">
    <label for="title-{{$locale}}">
       عنوان دسته بندی
    </label>
    <input type="text" name="title[]" class="form-control" id="title-{{$locale}}" value="{{isset($category)?$category->title:Request::old('title')}}" required>
</div>
<input type="hidden" name="locales[]" value="{{$key}}">
@endforeach
<div class="form-group text-center">
   <!--<input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">-->
    <input type="submit" name="publish" class="btn btn-primary btn-lg" value="
    تایید
    ">
</div>
</form>
