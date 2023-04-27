<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Users Detail</title>
    <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
        </style>
</head>
<body>
    <div class="container">
        <img src="{{$details[0]->image}}" alt="" style="margin-left:100px; width: 150px; height: 150px;">
        <h2>User Details</h2>
        <table class="table table-striped" id="customers">
            <tbody>
                <tr>
                    <th><strong>Emp ID</strong></th>
                    <td>{{$details[0]->emp_id}}</td>
                </tr>
                <tr>
                    <th><strong>Name</strong></th>
                    <td>{{$details[0]->name}}</td>
                </tr>
                <tr>
                    <th><strong>Email iD</strong></th>
                    <td>{{$details[0]->email}}</td>
                </tr>
                <tr>
                    <th><strong>Mobile</strong></th>
                    <td>{{$details[0]->mobile}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
