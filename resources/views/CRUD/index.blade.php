<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
     body {
    margin: 0;
    min-height: 100vh;
    background: linear-gradient(135deg, #05070f, #0a1a2f, #0d2b3e, #071a24);
    background-attachment: fixed;
    position: relative;
    overflow-x: hidden;
}

body::before {
    content: "";
    position: fixed;
    inset: 0;
    background-image:
        radial-gradient(2px 2px at 10% 20%, white, transparent),
        radial-gradient(1.5px 1.5px at 30% 70%, white, transparent),
        radial-gradient(1px 1px at 50% 40%, white, transparent),
        radial-gradient(2px 2px at 70% 15%, white, transparent),
        radial-gradient(1.5px 1.5px at 85% 65%, white, transparent),
        radial-gradient(1px 1px at 90% 85%, white, transparent),
        radial-gradient(1.5px 1.5px at 15% 90%, white, transparent),
        radial-gradient(1px 1px at 60% 25%, white, transparent);
    opacity: 0.5;
    pointer-events: none;
    z-index: 0;
}

        .cosmic-wrapper {
            position: relative;
            z-index: 1;
            max-width: 900px;
            margin: 4rem auto;
            padding: 0 1rem;
        }

        .cosmic-panel {
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 0 40px 5px rgba(138, 43, 226, 0.35);
        }

        .cosmic-panel h2 {
            color: white;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        table {
            color: white;
            border-collapse: separate;
            border-spacing: 0 8px;
        }

        thead th {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.85rem;
            text-transform: uppercase;
            border: none;
            padding-bottom: 0.5rem;
        }

        tbody tr {
            background-color: rgba(255, 255, 255, 0.05);
            transition: box-shadow 0.3s ease, transform 0.2s ease;
        }

        tbody tr:hover {
            box-shadow: 0 0 20px 3px rgba(138, 43, 226, 0.5);
            transform: scale(1.01);
        }

        tbody td {
            border: none;
            padding: 0.9rem 1rem;
            vertical-align: middle;
        }

        tbody td:first-child {
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }

        tbody td:last-child {
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
        }

        .btn-cosmic-view {
            background: linear-gradient(135deg, #1e88e5, #42a5f5);
            border: none;
            color: white;
        }

        .btn-cosmic-edit {
            background: linear-gradient(135deg, #f7b733, #fc4a1a);
            border: none;
            color: white;
        }

        .btn-cosmic-delete {
            background: linear-gradient(135deg, #8e0e00, #d81159);
            border: none;
            color: white;
        }

        .btn-cosmic-view:hover,
        .btn-cosmic-edit:hover,
        .btn-cosmic-delete:hover {
            filter: brightness(1.15);
            color: white;
        }

        .action-btn {
            font-size: 0.8rem;
            padding: 0.35rem 0.7rem;
            border-radius: 6px;
            margin-right: 0.3rem;
        }
    </style>
</head>
<body>

    <div class="cosmic-wrapper">
        <div class="cosmic-panel">
            <h2>Items</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->category }}</td>
                            <td>{{ $data->brand }}</td>
                            <td>
                                <a href="{{route('view', $data->id)}}" class="btn btn-cosmic-view action-btn">View</a>
                              
                                <form action="{{ route('delete', $data->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this item?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-cosmic-delete action-btn">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{route('create')}}" class="btn btn-cosmic-view action-btn">Add new one</a>
        </div>
    </div>

</body>
</html>