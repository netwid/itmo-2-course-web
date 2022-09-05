<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laba 1</title>
    <style>
        body.main {
            background-color: #2e3131;
            font-family: 'Times New Roman', Times, serif;
        }

        header {
            width: fit-content;
            padding-right: 10px;
            padding-left: 10px;
            margin: auto;
            font-style: italic;
            color: #A5C9CA;
            font-size: 20px;
            display: grid;
            text-align: center;
            border-radius: 25px;
            border: 1px solid;
        }

        input::placeholder {
            color: #2e3131;
        }

        label.name {
            margin-right: 10px;
        }

        main {
            display: grid;
            justify-items: center;
        }

        div.first_row {
            display: flex;
            justify-content: center;
        }

        div.input {
            background-color: #A5C9CA;
            border-radius: 25px;
            display: grid;
            align-content: center;
            height: fit-content;
            padding: 10px;
        }

        div > div {
            margin: 12px 12px 12px 20px;
        }

        table {
            margin-left: 10px;
            font-family: arial, sans-serif;
            border-collapse: separate;
            border-spacing: 0;
            width: auto;
            border: solid black 1px;
            border-radius: 6px;
        }

        /* top-left border-radius */
        table tr:first-child th:first-child {
            border-top-left-radius: 6px;
        }

        /* top-right border-radius */
        table tr:first-child th:last-child {
            border-top-right-radius: 6px;
        }

        /* bottom-left border-radius */
        table tr:last-child td:first-child {
            border-bottom-left-radius: 6px;
        }

        /* bottom-right border-radius */
        table tr:last-child td:last-child {
            border-bottom-right-radius: 6px;
        }

        img[src] {
            border-radius: 25px;
        }

        td, th {
            background-color: #A5C9CA;
            border: 1px solid #395B64;
            text-align: center;
            padding: 8px;
        }

        th.variable {
            width: 70px;
            text-align: center;
        }
    </style>
</head>
<!-- селектор класса -->
<body class="main">
<header>
    <h1>Кузьмин Илья Дмитриевич. P32111. 1311</h1>
</header>
<main>
    <div class="first_row">
        <div>
            <!-- селектор атрибута -->
            <img src="/public/areas.png" alt="" id="image">
        </div>
        <!-- селектор дочернего элемента -->
        <div class="input">
            <div>
                <label class="name" for="X">X: </label>
                <select name="X" id="X">
                    <option value="-5">-5</option>
                    <option value="-4">-4</option>
                    <option value="-3">-3</option>
                    <option value="-2">-2</option>
                    <option value="-1">-1</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div>
                <label class="name" for="Y">Y: </label>
                <!-- селектор псевдоэлемента -->
                <input type="text" placeholder="Enter y coordinate" name="Y" id="Y">
            </div>
            <div>
                <label class="name" for="R">R: </label>
                <label for="R-1">1</label>
                <input type="radio" name="R" value="1" id="R-1">
                <label for="R-2">2</label>
                <input type="radio" name="R" value="2" id="R-2">
                <label for="R-3">3</label>
                <input type="radio" name="R" value="3" id="R-3">
                <label for="R-4">4</label>
                <input type="radio" name="R" value="4" id="R-4">
                <label for="R-5">5</label>
                <input type="radio" name="R" value="5" id="R-5">
            </div>
        </div>
    </div>
    <div>
        <table id="table">
            <tr>
                <th class="variable">X</th>
                <th class="variable">Y</th>
                <th class="variable">R</th>
                <th>Current time</th>
                <th>Execution time</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
        </table>
    </div>
</main>
</body>
</html>