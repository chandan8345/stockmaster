@include('layout.header')
<style>
.container { padding-top: 40px; }
#details { font-family: "Quicksand", sans-serif; font-size: 80px; }
#home-box > h2 { font-family: "Quicksand", sans-serif; font-weight: 400; line-height: 1.1; color: #45b1ae; }
.price { font-size: 15px; float: left; }
.pricing_header { background: none repeat scroll 0% 0% rgb(44, 62, 80); border-radius: 5px 5px 0px 0px; transition: background 0.4s ease-out 0s; }
.pricing_header h3 { text-align:center; line-height: 25px; padding: 15px 0px; margin: 0px; font-family: "Quicksand", sans-serif; font-weight: 400; color: white; }
.list-group-item:first-child { border-top-right-radius: 0px; border-top-left-radius: 0px; }
.btn { float: right; font-family: "Quicksand", sans-serif; font-weight:500;}
.off { text-decoration: line-through; color: rgb(86,86,86); }
.space {height: 3px; background-color: #75b1ae;}
span{margin-right:4px;}
</style>
 <div class="container">    
 <input type ="hidden" id="token" name="_token" value ="<?php echo csrf_token(); ?>">                 
                       <!-- Pack 1-->
                        <div class="col-md-4" id="home-box">
                            <div class="pricing_header">
                            <marquee behavior="slide" direction="down"><h3>CATEGORY</h3></marquee>
                                <div class="space"></div>
    						</div>
                                <ul class="list-group categorylist" id="categorylist"> <?php $i=0;?>
                                    @foreach($category as $row)
                                    <?php $i++;?>
                                        <li class="list-group-item" onblur="category({{$row->id}})" id="{{$row->id}}"  contenteditable  >{{$row->name}}</li>
                                    @endforeach
                                    </ul>
                                
                                <div class="try">
                                    <p class="price"><span class="glyphicon glyphicon glyphicon-save"></span> {{$i}}</p>
                                    <a class="btn btn-primary" href="#" onclick="addCategory()" type="button">NEW</a>
                                </div>
                            </div>
                        <!-- Pack 2-->
                        <div class="col-md-4" id="home-box">
                            <div class="pricing_header">
                                <marquee behavior="slide" direction="down"><h3>BRAND</h3></marquee>
                                <div class="space"></div>
    						</div>
                                <ul class="list-group brandlist">
                                <?php $i=0;?>
                                    @foreach($brand as $row)
                                    <?php $i++; ?>
                                        <li class="list-group-item" onblur="brand({{$row->id}})" id="{{$row->id}}" contenteditable>  {{$row->name}}</li>
                                    @endforeach    
                                    </ul>
                                
                                <div class="try">
                                    <p class="price"><span class="glyphicon glyphicon glyphicon-save"></span> {{$i}}</p>
                                    <a class="btn btn-primary" href="#" onclick="addBrand()"  type="button">NEW</a>

                                </div>
                            </div>
                        
                        
                        <!-- Pack 3-->
                        <div class="col-md-4" id="home-box">
                            <div class="pricing_header">
                                <marquee behavior="slide" direction="down"><h3>UNIT</h3></marquee>
                                <div class="space"></div>
							</div>
                                <ul class="list-group unitlist">
                                    <?php $i=0;?>
                                    @foreach($unit as $row)
                                    <?php $i++;?>
                                        <li class="list-group-item" onblur="unit({{$row->id}})" id="{{$row->id}}"   contenteditable > {{$row->name}}</li>
                                    @endforeach    
                                    </ul>
                                
                                <div class="try">
                                    <p class="price"><span class="glyphicon glyphicon glyphicon-save"></span>  {{$i}}</p>
                                    <button class="btn btn-primary" href="#" onclick="addUnit()"  type="button">NEW</button></li>
                                </div>
                            </div>
@include('layout.fotter')
<script type="text/javascript">
        function category(id){
            var name=$("#"+id).html();
            if(name.length>0){
            $.ajax({
                        type: "POST",
                        url: '{{URL::to("/updateCategory")}}',
	                      data: {
                        id:id,
                        name:name,
                        _token:$("#token").val()
                        },
						success:function(response){
                            console.log(response);
						}
					});	
            }        
        }
        function brand(id){
            var name=$("#"+id).html();
            if(name.length>0){
            $.ajax({
                        type: "POST",
                        url: '{{URL::to("/updateBrand")}}',
	                      data: {
                        id:id,
                        name:name,
                        _token:$("#token").val()
                        },
						success:function(response){
                            console.log(response);
						}
					});	
            }        
        }
        function unit(id){
            var name=$("#"+id).html();
            if(name.length>0){
            $.ajax({
                        type: "POST",
                        url: '{{URL::to("/updateUnit")}}',
	                      data: {
                        id:id,
                        name:name,
                        _token:$("#token").val()
                        },
						success:function(response){
                            console.log(response);
						}
					});	
            }        
        }
        function addCategory(){
            $('.categorylist').append("<li class='list-group-item' id='ic' onblur='insertCategory()' contenteditable></li>");
        }
        function insertCategory(){
            var item=$('#ic').html();
            if(item.length>0){
            $.ajax({
                        type: "POST",
                        url: '{{URL::to("/addCategory")}}',
	                      data: {
                        name:item,
                        _token:$("#token").val()
                        },
						success:function(response){
                            console.log(response);
						}
					});
            }        
        }
        function addBrand(){
            $('.brandlist').append("<li class='list-group-item' id='ib' onblur='insertBrand()' contenteditable></li>");
        }
        function insertBrand(){
            var item=$('#ib').html();
            if(item.length>0){
            $.ajax({
                        type: "POST",
                        url: '{{URL::to("/addBrand")}}',
	                      data: {
                        name:item,
                        _token:$("#token").val()
                        },
						success:function(response){
                            console.log(response);
						}
					});
            }        
        } 
        function addUnit(){
            $('.unitlist').append("<li class='list-group-item' id='iu' onblur='insertUnit()' contenteditable></li>");
        }
        function insertUnit(){
            var item=$('#iu').html();
            if(item.length>0){
            $.ajax({
                        type: "POST",
                        url: '{{URL::to("/addUnit")}}',
	                      data: {
                        name:item,
                        _token:$("#token").val()
                        },
						success:function(response){
                            console.log(response);
						}
					});
            }        
        }     
</script>