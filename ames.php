<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIMS - Add Book</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="ames.css">
</head>

<body>
    <div class="container">
        <nav class="sidebar">
            <h2>LIMS</h2>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Book</a>
                    <ul>
                        <li><a href="#">Add Book</a></li>
                        <li><a href="#">View Book</a></li>
                        <li><a href="#">Lent Book</a></li>
                        <li><a href="#">Return Book</a></li>
                        <li><a href="#">Book Report</a></li>
                    </ul>
                </li>
                <li><a href="#">Student</a></li>
                <li><a href="#">Task</a></li>
                <li><a href="#">User</a></li>
                <li><a href="#">Setting</a></li>
            </ul>
        </nav>

        <div class="main-content">
            <header>
                <input type="text" placeholder="Search ...">
                <div class="right-menu">
                    <button>English</button>
                    <span class="user-icon">⚙</span>
                </div>
            </header>

            <div class="content">
                <div class="add-book-section">
                    <h2>Add Book</h2>
                    <form class="add-book-form">
                        <label for="bookName">Name of Book</label>
                        <input type="text" id="bookName">

                        <label for="bookType">Type of Book</label>
                        <select id="bookType">
                            <option value="">Select</option>
                        </select>

                        <label for="author">Author</label>
                        <input type="text" id="author">

                        <label for="quantity">Quantity</label>
                        <input type="number" id="quantity">

                        <label for="isbn">ISBN NO</label>
                        <input type="text" id="isbn">

                        <label for="edition">Edition</label>
                        <select id="edition">
                            <option value="">Select</option>
                        </select>

                        <label for="year">Year</label>
                        <input type="date" id="year">

                        <label for="imageFile">Image File</label>
                        <input type="file" id="imageFile">

                        <button type="button" class="add-btn">Add book</button>
                    </form>
                </div>

                <div class="book-list-section">
                    <div class="list-header">
                        <input type="date">
                        <input type="text" placeholder="Search Name...">
                        <button>🔍</button>
                    </div>
                    <table class="book-list-table">
                        <thead>
                            <tr>
                                <th>ID#</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Author</th>
                                <th>QTY</th>
                                <th>ISBN</th>
                                <th>Edition</th>
                                <th>Year</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="9">No data available. Please add book to view in this list of tables.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="buttons">
                        <button>Cancel</button>
                        <button>Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>