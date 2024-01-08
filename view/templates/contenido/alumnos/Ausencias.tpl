<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 60px;
            width: 95%;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.253);
            border-radius: 10px;
            overflow: hidden;
        }

        .header {
            background-color: #669fb1;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .header h1 {
            font-size: 36px;
            margin: 0;
        }

        .table-container {
            padding: 0 20px;
            max-height: 700px;
            overflow-y: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            position: sticky;
            top: 0;
            z-index: 1;
            background-color: #669fb1f6;
            color: #fff;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Ausencias (justificadas/in-justificadas) en cursos</h1>
        </div>
        <div class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre profesor</th>
                        <th>Nombre Alumno</th>
                        <th>Motivo</th>
                        <th>Justicación de la tardía</th>

                    </tr>
                </thead>
                {section name=ausencias loop=$arr_ausencias}
                    <tr>
                        <td>{$arr_ausencias[ausencias].id}</td>
                        <td>{$arr_ausencias[ausencias].nombre_profesor}</td>
                        <td>{$arr_ausencias[ausencias].nombre_alumno}</td>
                        <td>{$arr_ausencias[ausencias].motivo}</td>
                        <td>{$arr_ausencias[ausencias].justificada}</td>
                    </tr>
                {/section}
            </table>
        </div>
    </div>

    <!-- Bootstrap JS (opcional, si se requieren funcionalidades de Bootstrap) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>