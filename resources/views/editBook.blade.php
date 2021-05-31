<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update Address Book</title>
</head>
<style>
  form{
    display: flex;
    flex-direction: column;
    width: 60%;
    margin: 0 auto;
    padding: 10px;
  }

  input{
    margin-bottom: 10px;
    padding: 5px;
    outline: none;
  }
  label{
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 10px;
  }

  button{
    background-color: gray;
    width: 160px;
    border:none;
    height: 30px;
    border-radius: 10px;
    margin-bottom: 10px;
    cursor: pointer;
    color: white;
  } 
  
  button:hover{
    background-color: rgba(133, 250, 182, 0.979);
  }

  button a{
    text-decoration: none;
  }

  button a:visited{
    color: white;
  }


</style>
<body>
  <form action="/dashboard/{{ $readValue->id }}" method="POST">
    @method('PUT')
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $readValue->name }}">
    <label for="address">Address</label>
    <input type="text" name="address" value={{ $readValue->address }}>
    <label for="phoneNumber">Phone Number</label>
    <input type="text" name="phoneNumber" value={{ $readValue->phoneNumber }}>
    <label for="email">Email</label>
    <input type="text" name="email" value={{ $readValue->email }}>
    <button>Update</button>
    <button><a href="/dashboard">Cancel</a></button>
  </form>

  <form action="/dashboard/{{ $readValue->id }}">
    
    @csrf
    @method('DELETE')
    <button>Delete</button>
  </form>
</body>
</html>