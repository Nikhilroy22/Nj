<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatGPT API with jQuery AJAX</title>
   <script src="{{ asset('/eruda/eruda.js') }}"></script>
<script>eruda.init();</script>

<script src="{{ asset('dist/jquery.min.js') }}"></script>
</head>
<body>
    <h1>ChatGPT Integration</h1>
    <textarea id="user-input" placeholder="Type your message here"></textarea>
    <button id="send">Send</button>
    <div id="response"></div>

    <script>
        $(document).ready(function () {
            const apiKey = "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"; // Replace with your OpenAI API key
            
            $("#send").click(function () {
                const userInput = $("#user-input").val();

                if (!userInput.trim()) {
                    alert("Please enter a message.");
                    return;
                }

                // Clear the response area
                $("#response").html("Loading...");

                $.ajax({
                    url: "https://api.openai.com/v1/chat/completions",
                    method: "POST",
                    headers: {
                        "Authorization": `Bearer ${apiKey}`,
                        "Content-Type": "application/json"
                    },
                    data: JSON.stringify({
                        model: "gpt-4o-mini", // or "gpt-4" if available
                        messages: [{ role: "user", content: userInput }],
                        max_tokens: 100
                    }),
                    success: function (data) {
                        const reply = data.choices[0].message.content;
                        $("#response").html(`<strong>ChatGPT:</strong> ${reply}`);
                    },
                    error: function (xhr, status, error) {
                        $("#response").html(`<strong>Error::</strong> ${xhr.responseText || status}`);
                        console.log(error)
                    }
                });
            });
        });
    </script>
</body>
</html>
