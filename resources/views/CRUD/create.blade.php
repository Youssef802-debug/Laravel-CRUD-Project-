<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
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
            margin-bottom: 1.5rem;
            text-align: center;
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
            background: linear-gradient(135deg, #6a3093, #a044ff);
            border: none;
            color: white;
            font-weight: bold;
            padding: 0.6rem 1rem;
            border-radius: 8px;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .cosmic-btn:hover {
            box-shadow: 0 0 25px 6px rgba(160, 68, 255, 0.7);
            transform: scale(1.03);
            color: white;
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="cosmic-card">
            <h2>Add Item</h2>

            <form action="{{ route('store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="cosmic-label">Name</label>
                    <input type="text" name="name" class="form-control cosmic-input" placeholder="Enter name">
                </div>

                <div class="mb-3">
                    <label class="cosmic-label">Category</label>
                    <input type="text" name="category" class="form-control cosmic-input" placeholder="Enter category">
                </div>

                <div class="mb-4">
                    <label class="cosmic-label">Brand</label>
                    <input type="text" name="brand" class="form-control cosmic-input" placeholder="Enter brand">
                </div>
<button type="submit" class="cosmic-btn w-100">Add Item</button>
              
            </form>
        </div>
    </div>

</body>
</html>