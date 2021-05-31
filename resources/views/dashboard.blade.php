<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

button{
  background-color: rgba(133, 250, 182, 0.979);
  height: 30px;
  width: 160px;
  border: none;
  outline: none;
  border-radius: 10px;
  padding: 5px;
  margin-bottom: 10px;
}

button:hover{
  background-color: aqua;
}

button a{
  text-decoration: none;
  color: white;
}

td a{
  text-decoration: none;
  font-weight: 600;
  font-size: 20px;
}

td a:hover{
  color: black;
}

td a:visited{
  color: blue;
}

</style>
</head>
<body>

<h2>My Address Book</h2>
<button><a href="/dashboard/create">Add New Entry</a></button>
<h4>Click on the names for editing.</h4>
<table>
  <tr>
    <th>Name</th>
    <th>Address</th>
    <th>Phone Number</th>
    <th>Email Address</th>
  </tr>
  @foreach ( $readValues as $readValue)
        <tr>
            <td><a href="/dashboard/{{ $readValue->id }}/edit">{{ $readValue->name }}</a></td>
            <td>{{ $readValue->address }}</td>
            <td>{{ $readValue->phoneNumber }}</td>
            <td>{{ $readValue->email }}</td>
         </tr>
  @endforeach

</table>
</body>
</html>
