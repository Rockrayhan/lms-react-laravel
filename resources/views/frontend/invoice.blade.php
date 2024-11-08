<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .invoice-area {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-title {
            font-size: 24px;
            margin: 0;
        }
        .invoice-details {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .invoice-details-flex {
            display: flex;
            justify-content: space-between;
        }
        .invoice-single-details {
            flex: 1;
            margin-right: 20px;
        }
        .invoice-details-title {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .details-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .details-list li {
            margin-bottom: 5px;
        }
        footer {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Invoice area Starts -->
<div class="invoice-area">
    <div class="invoice-wrapper">
        <div class="invoice-header">
            <h1 class="invoice-title">Students Invoice</h1>
        </div>
        <div class="invoice-details">
            <div class="invoice-details-flex">
                <div class="invoice-single-details">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Purchase Date</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Price</th>
                            <th scope="col">Transaction ID</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            @php $sl = 1  @endphp
                            @foreach ($orders as $item)
                                
                            <tr>
                                <th> {{$sl++}} </th>
                                <td> {{$item['product_name']}} </td>
                                <td>{{$item['created_at']}}</td>
                                <td>{{$item['payment']}}</td>
                                <td>{{$item['price']}}</td>
                                <td>{{$item['t_id']}}</td>
                                
                                
                            </tr>
                            @endforeach
                         
                       
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
        <footer>
            <h3>&copy; {{ date('Y') }} EKTU KHANI TECH</h3>
        </footer>
    </div>
</div>
<!-- Invoice area end -->

</body>
</html>
