<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    .glow-box {
        width: 320px;
        height: 320px;
        background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
        color: white;
        font-size: 1.6rem;
        font-weight: bold;
        border-radius: 12px;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        text-decoration: none;
        z-index: 2;
    }

    .glow-box:hover {
        box-shadow: 0 0 35px 10px rgba(138, 43, 226, 0.8),
                    0 0 60px 20px rgba(0, 174, 255, 0.4);
        transform: scale(1.05);
    }

    .glow-box::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image:
            radial-gradient(2px 2px at 20% 30%, white, transparent),
            radial-gradient(1.5px 1.5px at 70% 60%, white, transparent),
            radial-gradient(1px 1px at 40% 80%, white, transparent),
            radial-gradient(1.5px 1.5px at 85% 20%, white, transparent);
        opacity: 0.6;
        pointer-events: none;
        z-index: 1;
    }
</style>
</head>
<body>
   

<div class="d-flex justify-content-center align-items-center gap-5 vh-100">
    <a href="{{route('create')}}" class="glow-box d-flex justify-content-center align-items-center text-decoration-none text-white">
        ADD
    </a>
    <a href="{{route('index')}}" class="glow-box d-flex justify-content-center align-items-center text-decoration-none text-white">
        VIEW
    </a>
</div>>

</body>
</html>