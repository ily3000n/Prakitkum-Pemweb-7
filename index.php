<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form, table {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid #ddd;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        form {
            padding: 20px;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }

        table tr:hover {
            background-color: #f5f5f5;
        }

        table td a {
            text-decoration: none;
            color: #333;
            margin-right: 10px;
        }

        table td a:hover {
            color: #4CAF50;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

    <h1>Data Mahasiswa</h1>

  
    <h2>Tambah Mahasiswa</h2>
    <form action="add.php" method="post">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <label for="kode_prodi">Kode Prodi:</label>
        <input type="text" id="kode_prodi" name="kode_prodi" required>
        <button type="submit">Tambah</button>
    </form>

  
    <label for="search">Cari Berdasarkan NIM:</label>
    <input type="text" id="search" name="nim" required>
    
   
    <label for="prodi">Filter Berdasarkan Program Studi:</label>
    <select id="prodi" name="prodi">
        <option value="">-- All --</option>
        <option value="IF">Teknik Informatika</option>
        <option value="GT">Teknik Geomatika</option>
        <option value="EL">Teknik Elektro</option>
        <option value="SL">Teknik Sipil</option>
        <option value="ME">Teknik Mesin</option>
        <option value="IN">Teknik Industri</option>
        <option value="IK">Ilmu Komputer</option>
        <option value="LK">Teknik Lingkungan</option>
        <option value="BI">Biologi</option>
        <option value="KM">Kimia</option>
    </select>

    <button type="button" id="searchButton">Search</button>

    
    <table id="mahasiswaTable">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kode Prodi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'display.php'; ?>
        </tbody>
    </table>

    <script src="script.js"></script>
    <script>
        $(document).ready(function(){
           
            $("#searchButton").click(function(){
               
                var nim = $("#search").val();
                var prodi = $("#prodi").val();
                
             
                var rows = $("#mahasiswaTable tbody tr");

             
                rows.each(function(){
                    var currentNim = $(this).find("td:first-child").text();
                    var currentProdi = $(this).find("td:nth-child(3)").text();

                    if (currentNim.includes(nim) && (prodi === "" || currentProdi === prodi)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>
</body>
</html>
