@extends('layouts.app')
@section('content')
    
     <div class="row col-md-9 col-lg-9 col-sm-3 pull-left" style="background: white;">
      <h1>Create new Company </h1>
      <div class="row col-sm-12 col-lg-12 col-md-12">

                        
                    <form method="post" action="{{ route('goods.store')}}">
                              {{csrf_field()}}

                          
                                 <div class="form-group">
                                   <label for="grv-name">Name <span class="requierd">*</span></label>
                                    <input type="text" class="form-control" name="name" id="grv-name" placeholder="Enter Company Name" spellcheck="false" required="Fill thisupplier"  >
                                      </div> 
                                      <div class="form-group">
                                   <label for="grv-supplier">supplier <span class="requierd">*</span></label>
                                    <input type="text" class="form-control" name="supplier" id="grv-supplier" placeholder="Enter supplier Name" spellcheck="false" required="Fill this shit"  >
                                      </div> 
                                      <div class="form-group">
                                   <label for="grv-date">Delivery date <span class="requierd">*</span></label>
                                    <input type="date" class="form-control" name="delivery_date" id="grv-delivery_date" placeholder="Enter delivery_date" spellcheck="false" required="Fill this shit"  >
                                      </div> 
                                      <div class="form-group">
                                   <label for="grv-expire">Expire date <span class="requierd">*</span></label>
                                    <input type="date" class="form-control" name="expire" id="grv-expire" placeholder="Enter Expire date" spellcheck="false" required="Fill this shit"  >
                                      </div> 
                                      <div class="form-group">
                                   <label for="grv-officer">Officer Name <span class="requierd">*</span></label>
                                    <input type="text" class="form-control" name="officer" id="grv-officer" placeholder="Enter officer Name" spellcheck="false" required="Fill this shit"  >
                                      </div> 
                                      <div class="form-group">
                                   <label for="grv-quntity">Quantity <span class="requierd">*</span></label>
                                    <input type="text" class="form-control" name="quantity" id="grv-quntity" placeholder="quantity" spellcheck="false" required="Fill this shit"  >
                                      </div> 


                                                                              <br>
                                        <br>

                             <div class="input-group">
                          <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        </div>

                  
                </form>
              </div> 
            </div>
          

           
             
@endsection