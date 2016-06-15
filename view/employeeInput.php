<h2>Employee Roster</h2>
      <hr /><div class="form-inline" style="margin-bottom: 20px;">
            <div class="form-group">
              <label for="eid">ID</label>
              <input type="text" class="form-control" name="eid" id="eid" placeholder="ID">
            </div>
            
            <div class="form-group">
              <label for="efname">First Name</label>
              <input type="text" class="form-control" name="efname" id="efname" placeholder="First Name">
            </div>
            
            <div class="form-group">
              <label for="elname">Surname</label>
              <input type="text" class="form-control" name="elname" id="elname" placeholder="Surname">
            </div>
            
            <div class="form-group">
              <label>Type</label>
              <div class="radio">
                <label>
                  <input type="radio" name="etype" id="salesperson" value="Salesperson"> Salesperson
                </label>
              </div>
            </div>
            <div class="form-group">
              <label></label>
              <div class="radio">
                <label>
                  <input type="radio" name="etype" id="others" value="Others"> Others
                </label>
              </div>
            </div>
</div>
<div class="form-group">
  <div class="btn-group" role="group">
            <button type="button" class="btn btn-primary" value="Add" onclick="addEmployee()">Add</button>
            <button type="button" class="btn btn-primary" value="Delete" onclick="deleteEmployee()">Delete</button>
            <button type="button" class="btn btn-primary" value="Update" onclick="updateEmployee()">Update</button>
            <button type="button" class="btn btn-primary" value="Search" onclick="searchEmployee()">Search</button>
            <button type="button" class="btn btn-primary" value="View All" onclick="viewAllEmployees()">View All</button>
  </div>
</div>