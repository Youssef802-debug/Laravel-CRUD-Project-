<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Item</title>
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


        .cosmic-showcase {
            position: relative;
            z-index: 1;
            max-width: 480px;
            margin: 0 auto;
        }

        .cosmic-orb {
            width: 90px;
            height: 90px;
            margin: 0 auto 1rem;
            border-radius: 50%;
            background: linear-gradient(135deg, #6a3093, #a044ff);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: bold;
            color: white;
            box-shadow: 0 0 30px 8px rgba(160, 68, 255, 0.6);
        }

        .cosmic-card {
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            border-radius: 16px;
            padding: 2.5rem 2rem 2rem;
            box-shadow: 0 0 40px 5px rgba(138, 43, 226, 0.35);
            text-align: center;
        }

        .cosmic-card h2 {
            color: white;
            font-weight: bold;
            margin-bottom: 0.2rem;
        }

        .cosmic-id-tag {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.85rem;
            letter-spacing: 1px;
            margin-bottom: 1.8rem;
        }
.cosmic-detail-row {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    background-color: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(138, 43, 226, 0.3);
    border-radius: 10px;
    padding: 0.7rem 1.2rem;
    margin-bottom: 0.8rem;
    transition: box-shadow 0.3s ease;
}

.cosmic-detail-row:hover {
    box-shadow: 0 0 15px 2px rgba(138, 43, 226, 0.4);
}

.cosmic-detail-label {
    color: rgba(255, 255, 255, 0.55);
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 0.3rem;
}

.cosmic-detail-value {
    color: white;
    font-weight: 600;
    word-break: break-word;
    overflow-wrap: break-word;
    width: 100%;
}

        .cosmic-btn {
            border: none;
            font-weight: bold;
            padding: 0.6rem 1.4rem;
            border-radius: 8px;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .btn-cosmic-edit {
            background: linear-gradient(135deg, #f7b733, #fc4a1a);
            color: white;
        }

        .btn-cosmic-back {
            background: rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .cosmic-btn:hover {
            transform: scale(1.05);
            color: white;
        }

        .btn-cosmic-edit:hover {
            box-shadow: 0 0 20px 5px rgba(252, 74, 26, 0.6);
        }

        .btn-cosmic-back:hover {
            box-shadow: 0 0 15px 3px rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="cosmic-showcase">

            <div class="cosmic-orb">
                {{ strtoupper(substr($data->name, 0, 1)) }}
            </div>

            <div class="cosmic-card">
                <h2>{{ $data->name }}</h2>
                <div class="cosmic-id-tag">ITEM #{{ $data->id }}</div>

                <div class="cosmic-detail-row">
                    <span class="cosmic-detail-label">Category</span>
                    <span class="cosmic-detail-value">{{ $data->category }}</span>
                </div>

                <div class="cosmic-detail-row">
                    <span class="cosmic-detail-label">Brand</span>
                    <span class="cosmic-detail-value">{{ $data->brand }}</span>
                </div>

                <div class="mt-4 d-flex justify-content-center gap-2">
                    <a href="{{ route('edit', $data->id) }}" class="btn cosmic-btn btn-cosmic-edit">Edit</a>
                    <a href="{{ route('index') }}" class="btn cosmic-btn btn-cosmic-back">Back to Index</a>
                </div>
            </div>

        </div>
    </div>

</body>
</html>