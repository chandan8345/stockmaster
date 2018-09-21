@include('layout.header')
<style>

.container{
    margin-top:90px;
    background-color:whitesmoke;
    border-top: 5px solid #ee0979;
    -webkit-box-shadow: 0px 5px 21px -2px rgba(0,0,0,0.47);
    -moz-box-shadow: 0px 5px 21px -2px rgba(0,0,0,0.47);
    box-shadow: 0px 5px 21px -2px rgba(0,0,0,0.47);
}
h3{
    border-bottom: 2px solid orangered;
    padding: 1px;
    color: black;
    font-size: 20px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}
.dashbord1{
    margin-top:10px; 
    margin-bottom:10px; 
    padding-bottom: 10px;
    background-color: white;
    border-right: 5px solid whitesmoke;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
}
.dashbord2{
    border-left: 2px solid whitesmoke;
    margin-top:10px; 
    margin-bottom:10px; 
    background-color: white;
}
#selectSupplier{
    margin-top: 10px;
}
.table{
    margin: 5px 0px 10px 0px;
    max-height: 100px;
}

hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
}
.shape{    
	border-style: solid; border-width: 0 70px 40px 0; float:right; height: 0px; width: 0px;
	-ms-transform:rotate(360deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(360deg); /* Safari and Chrome */
	transform:rotate(360deg);
}
.offer{
	background:#fff; border:1px solid #ddd; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: 15px 0; overflow:hidden;
}
.shape {
	border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-radius{
	border-radius:7px;
}
.offer-danger {	border-color: #d9534f; }
.offer-danger .shape{
	border-color: transparent #d9534f transparent transparent;
}
.offer-success {	border-color: #5cb85c; }
.offer-success .shape{
	border-color: transparent #5cb85c transparent transparent;
}
.offer-default {	border-color: #999999; }
.offer-default .shape{
	border-color: transparent #999999 transparent transparent;
}
.offer-primary {	border-color: #428bca; }
.offer-primary .shape{
	border-color: transparent #428bca transparent transparent;
}
.offer-info {	border-color: #5bc0de; }
.offer-info .shape{
	border-color: transparent #5bc0de transparent transparent;
}
.offer-warning {	border-color: #f0ad4e; }
.offer-warning .shape{
	border-color: transparent #f0ad4e transparent transparent;
}

.shape-text{
	color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
	-ms-transform:rotate(30deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(30deg); /* Safari and Chrome */
	transform:rotate(30deg);
}	
.offer-content{
	padding:0 20px 10px;
}
@media (min-width: 487px) {
  .container {
    max-width: 750px;
  }
  .col-sm-6 {
    width: 50%;
  }
}
@media (min-width: 900px) {
  .container {
    max-width: 970px;
  }
  .col-md-4 {
    width: 33.33333333333333%;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1170px;
  }
  .col-lg-3 {
    width: 25%;
  }
  }
.ui-menu .ui-menu-item a{
    color: #96f226;
    border-radius: 0px;
    border: 1px solid #454545;
}  
select{
    max-height:100px;
}
</style>
<input type ="hidden" id="token" name="_token" value ="<?php echo csrf_token(); ?>" >
<div class="container">
<div class="col-md-5 dashbord1">
<h3>Payment Panel</h3>
<ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Payment 1</a></li>
        <li><a data-toggle="tab" href="#menu1">Payment 2</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
                <div class="form-group">
                        <select class="form-control selectpicker" id="selectSupplier" placeholder="" data-live-search="true">
                                <option>Local Supplier</option>
                                <option>Malaysia</option>
                                
                            </select> 
                </div>
                        <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>
                                <span class="glyphicon glyphicon-trash"></span>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Dell</td>
                        <td>8000</td>
                        <td>8</td>
                        <td>80000</td>
                        <td>
                                <span class="glyphicon glyphicon-trash"></span>
                        </td>            
                      </tr>
                      <tr>
                            <td>Dell</td>
                            <td>8000</td>
                            <td>8</td>
                            <td>80000</td>
                            <td>
                                    <span class="glyphicon glyphicon-trash"></span>
                            </td>            
                          </tr>
                          <tr>
                                <td>Dell</td>
                                <td>8000</td>
                                <td>8</td>
                                <td>80000</td>
                                <td>
                                        <span class="glyphicon glyphicon-trash"></span>
                                </td>            
                              </tr>
                              <tr>
                                    <td>Dell</td>
                                    <td>8000</td>
                                    <td>8</td>
                                    <td>80000</td>
                                    <td>
                                            <span class="glyphicon glyphicon-trash"></span>
                                    </td>            
                                  </tr>

                    </tbody>
                  </table>
                  <div class="col-md-6" style="text-align:left;padding:0px">
                        <h4>Total Item: 2</h4>
                    </div>
                    <div class="col-md-6" style="text-align:right;padding:0px">
                            <h4>Subtotal: 2000</h4>
                    </div>
                    <div class="col-md-6" style="text-align:left;padding:0px">
                            <h4>Disc Amount: 10%</h4>
                        </div>
                        <div class="col-md-6" style="text-align:right;padding:0px">
                                <h4>VAT: 2.00</h4>
                        </div>    
                       <hr>
                       <div class="col-md-6" style="text-align:left;padding:0px">
                            <h4>Total Payable </h4>
                        </div>
                        <div class="col-md-6" style="text-align:right;padding:0px">
                                <h4>: 5000</h4>
                        </div>   
                        <div class="col-md-6" style="padding:1px;">
                            <button class="btn btn-md btn-danger btn-block">Cancel</button>    
                            </div>
                            <div class="col-md-6" style="padding:1px;">
                            <button class="btn btn-md btn-success btn-block">Payment</button>       
                            </div> 
        </div>
        <div id="menu1" class="tab-pane fade">
                <div class="form-group">
                        <select class="form-control selectpicker" id="selectSupplier" placeholder="" data-live-search="true">
                                <option>Local Supplier</option>
                                <option>Malaysia</option>
                                <option>Singapore</option>
                            </select> 
                </div>
                        <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>
                                <span class="glyphicon glyphicon-trash"></span>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Dell</td>
                        <td>8000</td>
                        <td>8</td>
                        <td>80000</td>
                        <td>
                                <span class="glyphicon glyphicon-trash"></span>
                        </td>            
                      </tr>
                      <tr>
                            <td>Dell</td>
                            <td>8000</td>
                            <td>8</td>
                            <td>80000</td>
                            <td>
                                    <span class="glyphicon glyphicon-trash"></span>
                            </td>            
                          </tr>
                          <tr>
                                <td>Dell</td>
                                <td>8000</td>
                                <td>8</td>
                                <td>80000</td>
                                <td>
                                        <span class="glyphicon glyphicon-trash"></span>
                                </td>            
                              </tr>
                              <tr>
                                    <td>Dell</td>
                                    <td>8000</td>
                                    <td>8</td>
                                    <td>80000</td>
                                    <td>
                                            <span class="glyphicon glyphicon-trash"></span>
                                    </td>            
                                  </tr>

                    </tbody>
                  </table>
                  <div class="col-md-6" style="text-align:left;padding:0px">
                        <h4>Total Item: 2</h4>
                    </div>
                    <div class="col-md-6" style="text-align:right;padding:0px">
                            <h4>Subtotal: 2000</h4>
                    </div>
                    <div class="col-md-6" style="text-align:left;padding:0px">
                            <h4>Disc Amount: 10%</h4>
                        </div>
                        <div class="col-md-6" style="text-align:right;padding:0px">
                                <h4>VAT: 2.00</h4>
                        </div>    
                       <hr>
                       <div class="col-md-6" style="text-align:left;padding:0px">
                            <h4>Total Payable </h4>
                        </div>
                        <div class="col-md-6" style="text-align:right;padding:0px">
                                <h4>: 5000</h4>
                        </div>   
                        <div class="col-md-6" style="padding:1px;">
                            <button class="btn btn-md btn-danger btn-block">Cancel</button>    
                            </div>
                            <div class="col-md-6" style="padding:1px;">
                            <button class="btn btn-md btn-success btn-block">Payment</button>       
                            </div> 
        </div>
      </div>      
</div>    
<div class="col-md-7 dashbord2">
<h3>Product Dashbord</h3>
<div class="col-md-12" style="margin-top:10px;">
<div class="form-group">
<input type="text" id="nameProduct" onblur="searchProduct()" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Quick Search">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
    <select class="form-control selectpicker" onchange="searchCategory()" id="selectCategory" placeholder="" data-live-search="true">
    <option>Select Category</option>
    @foreach($category as $row)
    <option value="{{ $row->id}}"  <?php if(!empty($searchCategory)){if($searchCategory == $row->id){echo "selected";}} ?>>{{ $row->name}}</option>
    @endforeach
    </select> 
   </div>
</div>
<div class="col-md-6">
<div class="form-group">
  <select class="form-control selectpicker" onchange="searchBrand()" id="selectBrand" placeholder="" data-live-search="true">
  <option>Select Brand</option>
  @foreach($brand as $row)
    <option value="{{ $row->id}}" <?php if(!empty($searchBrand)){if($searchBrand == $row->id){echo "selected";}} ?>>{{ $row->name}}</option>
    @endforeach
  </select>
  </select> 
  </div>
</div>
<hr>
<p>Choose Product</p>
<section>
  @foreach($data as $row)
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-success">
				<div class="shape">
					<div class="shape-text">
						{{$row->name}}						
					</div>
				</div>
				<div class="offer-content">
					<h4 class="lead">
						A success offer
					</h4>						
				</div>
			</div>
		</div>
@endforeach
</section>
</div>
</div>
@include('layout.fotter')
<script type="text/javascript">
$(function() {
  $('.selectpicker').selectpicker();
});
</script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript">
  $( function() {
    var availableTags =  <?php echo json_encode($product); ?>;
    $( "#nameProduct" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
  <script type="text/javascript">
  function searchProduct(){
    $.ajax({
          type: "POST",
          url: '{{URL::to("/searchProduct")}}',
	        data: {
          name:$("#nameProduct").val(),
          category:$("#selectCategory").val(),
          brand:$("#selectBrand").val(),
          _token:$("#token").val()
          },
						success:function(response){
            console.log(response);
						}
					});	
  }
  function searchCategory(){
    $.ajax({
          type: "POST",
          url: '{{URL::to("/searchProduct")}}',
	        data: {
          name:$("#nameProduct").val(),
          category:$("#selectCategory").val(),
          brand:$("#selectBrand").val(),
          _token:$("#token").val()
          },
						success:function(response){
            console.log(response);
						}
					});	
  }
  function searchBrand(){
    $.ajax({
          type: "POST",
          url: '{{URL::to("/searchProduct")}}',
	        data: {
          name:$("#nameProduct").val(),
          category:$("#selectCategory").val(),
          brand:$("#selectBrand").val(),
          _token:$("#token").val()
          },
						success:function(response){
            console.log(response);
						}
					});	
  }
  </script>