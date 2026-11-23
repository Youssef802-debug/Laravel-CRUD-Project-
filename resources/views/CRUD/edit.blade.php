<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
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

        .cosmic-card {
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            border-radius: 16px;
            padding: 2.5rem;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 0 40px 5px rgba(138, 43, 226, 0.35);
            position: relative;
            z-index: 1;
        }

        .cosmic-card h2 {
            color: white;
            font-weight: bold;
            margin-bottom: 0.3rem;
            text-align: center;
        }

        .cosmic-id-tag {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.85rem;
            letter-spacing: 1px;
            text-align: center;
            margin-bottom: 1.8rem;
        }

        .cosmic-input {
            background-color: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(138, 43, 226, 0.4);
            color: white;
            border-radius: 8px;
            padding: 0.6rem 1rem;
            transition: box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .cosmic-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .cosmic-input:focus {
            background-color: rgba(255, 255, 255, 0.12);
            border-color: rgba(138, 43, 226, 0.9);
            box-shadow: 0 0 15px 3px rgba(138, 43, 226, 0.6);
            color: white;
            outline: none;
        }

        .cosmic-label {
            color: rgba(255, 255, 255, 0.85);
            font-size: 0.9rem;
            margin-bottom: 0.4rem;
        }

        .cosmic-btn {
            border: none;
            font-weight: bold;
            padding: 0.6rem 1rem;
            border-radius: 8px;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .btn-cosmic-save {
            background: linear-gradient(135deg, #6a3093, #a044ff);
            color: white;
        }

        .btn-cosmic-save:hover {
            box-shadow: 0 0 25px 6px rgba(160, 68, 255, 0.7);
            transform: scale(1.03);
            color: white;
        }

        .btn-cosmic-cancel {
            background: rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .btn-cosmic-cancel:hover {
            box-shadow: 0 0 15px 3px rgba(255, 255, 255, 0.2);
            color: white;
            transform: scale(1.03);
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="cosmic-card">
            <h2>Edit Item</h2>
            <div class="cosmic-id-tag">ITEM #{{ $data->id }}</div>

            <form action="{{ route('update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="cosmic-label">Name</label>
                    <input type="text" name="name" class="form-control cosmic-input" value="{{ $data->name }}">
                </div>

                <div class="mb-3">
                    <label class="cosmic-label">Category</label>
                    <input type="text" name="category" class="form-control cosmic-input" value="{{ $data->category }}">
                </div>

                <div class="mb-4">
                    <label class="cosmic-label">Brand</label>
                    <input type="text" name="brand" class="form-control cosmic-input" value="{{ $data->brand }}">
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn cosmic-btn btn-cosmic-save w-100">Save Changes</button>
                    <a href="{{ route('index') }}" class="btn cosmic-btn btn-cosmic-cancel w-100 text-center">Cancel</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>