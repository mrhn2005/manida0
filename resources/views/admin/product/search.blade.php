<?php $i=0; ?>
@foreach ($products as $product)
<?php $i++; ?>
<form method="post" class="confirm-form" action="{{route('products.destroy',$product)}}" id="delete{{$product->id}}"> </form>


<input type="hidden" name="_method" value="DELETE" form="delete{{$product->id}}" >

<tr>
   <td>{{$i}}</td>

   <td>{{$product->name}}</td>
   <td>{{!empty($product->category)?$product->category->title:''}}</td>
   <td>{{$product->price}}</td>

    <td>
          <a class="btn btn-success" href="{{route('product.images',$product)}}">
              <i class="fa fa-plus"></i> </a> 
    </td>
    <td>
          <a class="btn btn-info" href="{{route('products.edit',$product)}}">
              <i class="fa fa-edit"></i> </a> 
    </td>

  
  <td>
     <button class="btn btn-danger" type="submit" form="delete{{$product->id}}">
       <span class="glyphicon glyphicon-remove"></span>
    </button> 
   </td>
 
 <!--<td><a class="btn btn-danger" href="../../resources/templates/back/delete_product.php?id={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>-->
</tr>
@endforeach
