<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .icon {
            opacity: 0;
            transition: opacity 0.3s ease;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            padding: 1rem;
            position: absolute;
        }

        .article:hover .icon {
            opacity: 1;
        }

        .heart-icon {
            top: 50%;
            left: 40%;
            transform: translate(-50%, -50%);
        }

        .comment-icon {
            top: 50%;
            right: 40%;
            transform: translate(50%, -50%);
        }

        .go-to-post-btn {
            opacity: 0;
            transition: opacity 0.3s ease;
            background-color: #4a5568; /* Tailwind color: gray-700 */
            color: #fff;
            padding: 0.25rem 0.5rem; /* Smaller padding for a smaller button */
            border-radius: 0.375rem; /* Tailwind class: rounded-md */
            position: absolute;
            bottom: 10%;
            right: 10%;
            font-size: 0.875rem; /* Tailwind class: text-sm */
        }

        .article:hover .go-to-post-btn {
            opacity: 1;
        }
        .animate-modal {
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        .hide-scrollbar {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
        }

        .hide-scrollbar::-webkit-scrollbar {
        display: none;  /* Webkit Browsers */
        }

    </style>
    <title>blogger</title>
</head>
<body class="bg-[#F4F2EE] dark:bg-gray-900 ">