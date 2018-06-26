@extends('layouts.app')
@section('content')
    
     <div class="row col-md-9 col-lg-9 col-sm-3 pull-left" style="background: white;">
      <h1>Issue Voture </h1>
      <div class="row col-sm-12 col-lg-12 col-md-12">

                        
                    <form method="post" action="{{ route('issues.store')}}">
                              {{csrf_field()}}

                             <table class="table table-dark table-bordered table-hover ">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">Item Name</th>        
                                    <th scope="col">Supplier</th>
                                    <th scope="col">Deliverd Date</th>
                                    <th scope="col">Expire Date</th>
                                    <th scope="col">Officer Name</th>
                                    <th scope="col">Quantity</th>
                                    

                                  </tr>
                                </thead>
                                <tbody>
                                  <div class="row">

                                   
                                   
                                       <tr>
                                       <td><input type="text" class="form-control" name="name" id="name" required=""/></td>
                                        <td><input type="text" class="form-control" name="supplier" id="supplier" required=""/></td>
                                        <td><input type="date" class="form-control" name="delevery_date" id=delevery_date" required=""/></td>
                                        <td><input type="Date" class="form-control" name="expire" id="expire" required=""/></td>
                                        <td><input type="text" class="form-control" name="officer" id="officer" required=""/></td>
                                        <td><input type="text" class="form-control" name="quantity" id="quantity" required=""/></td>
                                            
                                      </tr>
                                    </div>
                                  </tbody>
                                </table>
                                <div class="input-group">
                                  <input type="submit" class="btn btn-dark" name="submit" value="Submit">
                                </div>
                              </form>
                              <form>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Item name</label>
                                      <input type="text" class="form-control" name="name" id="name" required=""/>
                                      <label for="exampleInputEmail1">Subplier</label>
                                      <input type="text" class="form-control" name="supplier" id="supplier" required=""/>
                                      <label for="exampleInputEmail1">delevery_date</label>
                                      <input type="date" class="form-control" name="delevery_date" id=delevery_date" required=""/>
                                      <label for="exampleInputEmail1">expire</label>
                                      <input type="Date" class="form-control" name="expire" id="expire" required=""/>
                                      <label for="exampleInputEmail1">officer</label>
                                      <input type="text" class="form-control" name="officer" id="officer" required=""/>
                                      <label for="exampleInputEmail1">Email address</label>
                                     <input type="text" class="form-control" name="quantity" id="quantity" required=""/>
                                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        Check me out
                                      </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>

                          
                                
@endsection