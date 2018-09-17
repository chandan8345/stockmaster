<?php
$searchName="";
$searchCategory="";
$searchBrand="";
if(!empty($compact)){
$searchName=$compact['n'];
$searchCategory=$compact['c'];
$searchBrand=$compact['b'];
}
?>
@include('layout.header')
<style>
.ui-menu .ui-menu-item a{
    color: #96f226;
    border-radius: 0px;
    border: 1px solid #454545;
}
</style>
<div class="container">

<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div>
        <div class="col-md-12">
      <form action="/stocksearch" method="post">   
      <input type ="hidden" id="token" name="_token" value ="<?php echo csrf_token(); ?>"> 
        <div class="col-md-4">
    <div class="form-group">
    <label for="exampleInputEmail1">Product Name : </label>
    <input type="text" id="search" class="form-control" name="n" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="<?php if(!empty($searchName)){echo $searchName;} ?>">
    <small id="unitMsg" class="form-text hidden">please input here product unit</small>
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
    <label for="sel1">Category :</label>
  <select class="form-control" id="" name="c">
    <option value="0">Select Category</option>
    @foreach($category as $row)
    <option value="{{ $row->id}}"  <?php if(!empty($searchCategory)){if($searchCategory == $row->id){echo "selected";}} ?>>{{ $row->name}}</option>
    @endforeach
  </select>
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
  <label for="sel1">Brand :</label>
  <select class="form-control" name="b">
  <option value="0">Select Brand</option>
    @foreach($brand as $row)
    <option value="{{ $row->id}}" <?php if(!empty($searchBrand)){if($searchBrand == $row->id){echo "selected";}} ?>>{{ $row->name}}</option>
    @endforeach
  </select>
</div>
    </div>
    <div class="col-md-12">
    <button type="submit" class="btn btn-primary btn-block search" style="width: 100%;margin-bottom:10px;"><span class="glyphicon glyphicon-search"></span> Search</button>
        </div>
</form>
</div>
<?php if(!empty($data)){ $i=1; ?>

        <div class="col-md-12">
   
        <div class="table-responsive" style="max-height:400px; border:1px solid #ee0979;margin-left:17px;margin-right:17px; ">

                
              <table id="mytable" class="table table-striped table-hover tableFixHead">
                   <thead class="thead">
                   <th>Sl No</th>
                    <th>Product Name</th>
                     <th>Category</th>
                     <th>Brand</th>
                     <th>Unit</th>
                     <th>Sale Price</th>
                      <th colspan="2">Action</th>
                   </thead>
    <tbody>
    @foreach($data as $row)
    <tr>
    <td>{{$i++}}</td>
    <td>{{$row->name}}</td>
    <td>{{$row->category}}</td>
    <td>{{$row->brand}}</td>
    <td>{{$row->unit}}</td>
    <td>{{$row->sell}}</td>
    <td class="action"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-sm" data-title="Edit" data-toggle="modal" data-target="#{{$row->id}}" ><span class="glyphicon glyphicon-pencil"></span></button>
    <button class="btn btn-danger btn-sm" data-title="Delete" data-toggle="modal" data-target="#delete{{$row->id}}" ><span class="glyphicon glyphicon-trash"></span></button>
  </p>

  <div class="modal fade updateModal" id="{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <form action="" method="POST" > <!--updateProduct/{{$row->id}} -->
      <input type ="hidden" id="toke" name="_toke" value ="<?php echo csrf_token(); ?>" >
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Product Upgrade</h4>
      </div>
          <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
          <div class="form-group">
    <label for="exampleInputEmail1">Products Name</label>
    <input type="text" id="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{$row->name}}">
    </div></div>
    <div class="col-md-12">
    <div class="form-group">
  <label for="sel1">Category</label>
  <select class="form-control" id="category" name="category">
    <option value="0">Select Category</option>
    @foreach($category as $rw)
    <option value="{{ $rw->id}}"  <?php if($row->category_id == $rw->id){echo "selected";} ?> >{{ $rw->name}}</option>
    @endforeach
  </select>
</div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
  <label for="sel1">Brand</label>
  <select class="form-control" id="brand" name="brand">
  <option value="0">Select Brand</option>
    @foreach($brand as $ro)
    <option value="{{ $ro->id}}" <?php if($row->brand_id == $ro->id){echo "selected";} ?> >{{ $ro->name}}</option>
    @endforeach
  </select>
</div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
  <label for="sel1">Unit</label>
  <select class="form-control" id="unit" name="unit">
  <option value="0">Select Unit</option>
    @foreach($unit as $w)
    <option value="{{ $w->id}}" <?php if($row->unit_id == $w->id){echo "selected";} ?> >{{ $w->name}}</option>
    @endforeach
  </select>
</div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <label for="exampleInputEmail1">Purchase Price</label>
    <input type="number" id="purchase" class="form-control" name="purchase" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="" value="{{ $row->purchase }}">
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <label for="exampleInputEmail1">Sale Price</label>
    <input type="number" id="sales" class="form-control required" name="sale" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder=""  value="{{ $row->sell }}">

    </div>
    </div>
          </div>
      </div>
          <div class="modal-footer ">
        <button type="button" id="sub" value="{{$row->id}}" class="btn btn-success btn-lg updateSubmit" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
  </form>
      <!-- /.modal-dialog --> 
    </div>

  <div class="modal fad hide-modal" id="delete{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <form action="" method="POST" > 
      <input type ="hidden" id="tok" name="_tok" value ="<?php echo csrf_token(); ?>" >
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete {{ $row->name}} ?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" id="delete" value="{{$row->id}}" class="btn btn-danger delete" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default cancel" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
      </form>
        </div>
      </td>
    </tr>
    @endforeach
    </tbody>
        
</table>          
            </div>
            <p id="unitMsg" class="form-text " style="margin:10px 20px 0px 20px;">Showing Results 100</p>       
        </div>
        <?php } ?>
	</div>
 

    
    
    

</div>
@include('layout.fotter')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript">
  $( function() {
    var availableTags =  <?php echo json_encode($product); ?>;
    $( "#search" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
  <script type="text/javascript">
    $(document).on("click",'.updateSubmit',function(e){
      e.preventDefault();
					$.ajax({
                        type: "POST",
                        url: '{{URL::to("/updateProduct")}}',
	                      data: {
                        id:$("#sub").val(),
                        name:$("#name").val(),
	                      category:$("#category").val(),
						            brand:$("#brand").val(),
                        unit:$("#unit").val(),
                        purchase:$("#purchase").val(),
                        sales:$("#sales").val(),
                        _token:$("#toke").val()
                        },
						success:function(){
						$(".updateModal").modal('hide');
						}
					});	
	    });
      $(document).on("click",'.delete',function(e){
      e.preventDefault();
					$.ajax({
                        type: "POST",
                        url: '{{URL::to("/deleteProduct")}}',
	                      data: {
                        id:$("#delete").val(),
                        _token:$("#tok").val()
                        },
						success:function(){
						$(".hide-modal").modal('hide');

						}
					});  
	    });
      
  </script>