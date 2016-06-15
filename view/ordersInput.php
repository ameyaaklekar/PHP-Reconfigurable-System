<h2>Orders Master</h2>
      <hr /><div class="form-inline" style="margin-bottom: 20px;">
          <div class="form-group">
            <label for="onum">Order Number</label>
            <input type="text" class="form-control" name="onum" id="onum" placeholder="Order Number">
          </div>
          
          <div class="form-group">
            <label for="ocid">Customer ID</label>
            <input type="text" class="form-control" name="ocid" id="ocid" placeholder="Customer ID">
          </div>
          
          <div class="form-group">
            <label for="oeid">Employee ID</label>
            <input type="text" class="form-control" name="oeid" id="oeid" placeholder="Employee ID">
          </div>
          
</div>
</div>
<div class="form-group">
  <div class="btn-group" role="group">
          <button type="button" class="btn btn-primary" value="Add" onclick="addOrder()">Add</button>
          <button type="button" class="btn btn-primary" value="Delete" onclick="deleteOrder()">Delete</button>
          <button type="button" class="btn btn-primary" value="Update" onclick="updateOrder()">Update</button>
          <button type="button" class="btn btn-primary" value="Search" onclick="searchOrder()">Search</button>
          <button type="button" class="btn btn-primary" value="View All" onclick="viewAllOrders()">View All</button>
  </div>
</div>