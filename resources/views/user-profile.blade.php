<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        /* Add your CSS styling here */
        body {
            font-family: Arial, sans-serif;
            background-color: #DD761C;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .card {
            background: #f0f0f0;
            border-radius: 20px;
            overflow: hidden;
            max-width: 300px;
            margin: auto;
            padding: 20px;
            text-align: center;
        }

        .name {
            font-size: 24px;
            font-weight: bold;
            margin-top: 10px;
        }

        .about {
            font-size: 16px;
            color: #777;
            margin-top: 5px;
        }

        .buttons {
            margin-top: 20px;
        }

        .buttons button {
            background: #3498db;
            border: none;
            color: white;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
        }
    </style>
</head>
<body>
  <div class="card">
    <div class="name">{{ $user->username }}</div>
    <div class="about">{{ $user->email }}</div>
    <div class="about">{{ $user->phone }}</div>
    <div class="buttons">
      <a href="{{ route('user.edit-profile-form') }}"><button>Edit Profile</button></a>
      <a href="{{ route('user.dashboard') }}"><button>Back to Home</button></a>
    </div>
  </div>
</body>
</html>
