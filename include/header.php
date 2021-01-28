<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO BUAH ABC</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            max-height: 100vh;
            overflow: auto;
        }

        * {
            overflow: hidden;
        }

        h1 {
            color: #e74c3c;
        }

        hr {
            border: 1px solid #E5E5E5;
            margin: 20px 0;
        }

        .container {
            max-width: 1000px;
            margin: 10px auto;
            padding: 20px;
            background: #FFFFFF;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.12);
            border-radius: 20px;
        }

        .table-buah th,
        .table-buah td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table-buah .gambar {
            text-align: center;
            width: 200px;
            padding: 10px;
        }

        .table-buah .deskripsi {
            width: 500px;
        }

        img {
            height: 80px;
            width: 80px;
        }

        .text-danger {
            color: red;
        }

        .search {
            margin-bottom: 20px;
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .link a {
            margin: 0 3px;
            color: #2c3e50;
            font-weight: 600;
        }

        .link a:hover {
            margin: 0 3px;
            color: #3498db;
        }

        .form {
            padding: 20px 30px;
            margin: 0 auto;
            overflow: auto;
            border-radius: 8px;
        }

        .title {
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 20px;
            color: #3498db;
            padding-bottom: 3px;
            text-align: center;
        }

        .form label {
            display: block;
            margin: 0px 0px 15px 0px;
        }

        .form label>span {
            width: 150px;
            float: left;
            padding-top: 8px;
            padding-right: 5px;
        }

        .form input.input-field,
        textarea.input-field,
        .form .select-field {
            width: 300px;
        }

        .form input.input-field,
        .form textarea.input-field,
        .form .select-field,
        .search-field {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            border: 1px solid #a8a8a85e;
            box-shadow: 1px 1px 4px #EBEBEB;
            -moz-box-shadow: 1px 1px 4px #EBEBEB;
            -webkit-box-shadow: 1px 1px 4px #EBEBEB;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            padding: 7px;
            outline: none;
        }

        .form .input-field:focus,
        .search .search-field:focus,
        .form .select-field:focus {
            border: 1px solid #74b9ff;
        }

        .button {
            float: right;
            font-weight: bold;
        }

        .btn-cari {
            text-decoration: none;
        }

        .btn {
            border: none;
            cursor: pointer;
            padding: 8px 15px 8px 15px;
            color: #fff;
            box-shadow: 1px 1px 4px #DADADA;
            -moz-box-shadow: 1px 1px 4px #DADADA;
            -webkit-box-shadow: 1px 1px 4px #DADADA;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
        }

        .btn-kirimpesan,
        .btn-cari {
            background-color: #3498db;
            margin-left: 5px;
        }

        .btn-batal {
            background-color: #ecf0f1;
            color: #2c3e50;
        }

        .btn-kirimpesan:hover,
        .btn-cari:hover {
            background-color: #2980b9;
        }

        .btn-batal:hover {
            background-color: #bdc3c7;
        }

        .alert {
            color: #7C7C7C;
            padding: 15px 20px;
            text-align: center;
            border-radius: 7px;
        }

        .alert-success {
            background-color: rgba(4, 237, 41, 0.14);
            border: 1px solid #26de81;
        }

        .alert-danger {
            background-color: rgba(255, 118, 117, 0.14);
            ;
            border: 1px solid #e74c3c;
        }

        .footer {
            text-align: center;
            color: #7C7C7C;
        }
    </style>
</head>

<body>
    <div class="container">
        <center>
            <h1>TOKO BUAH "ABC"</h1>
            <br>
            <div class="link">
                <a href="index.php">Produk Kami</a>
                <a href="contact.php">Hubungi Kami</a>
            </div>
            <br>
            <hr>
        </center>