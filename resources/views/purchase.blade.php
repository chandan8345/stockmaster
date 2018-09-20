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
p{
    text-align: left;
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
</style>
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
<h4>Product Dashbord</h4>
</div>
</div>
@include('layout.fotter')

<script type="text/javascript">
$(function() {
  $('.selectpicker').selectpicker();
});
</script>