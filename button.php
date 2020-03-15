<!DOCTYPE html>
<html>
<head>
<style>

.navbar {
  overflow: hidden;
  background-color: #333;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}


.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
    </button>
    <div class="dropdown-content">
      <table border='0'>
                          
                            <tbody>
                              <tr>
                                  <td colspan='2'>user name <input type='text' name='username' value='' /></td>

                              </tr>
                              <tr>
                                  <td colspan='2'>password<input type='password' name='password' value='' /></td>

                              </tr>
                              <tr>
                                  <td><button>Dropdown</button></td>
                                  <td><a href='new_user.php'>new user</td>
                              </tr>
                          </tbody>
                      </table>
    </div>
  </div> 
</div>

</body>
</html>
