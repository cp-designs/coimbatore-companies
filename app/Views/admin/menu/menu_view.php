<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Menu System</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        #menu-container {
            list-style-type: none;
            padding-left: 20px;
        }
        #menu-container li {
            margin: 5px 0;
            padding: 10px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            cursor: move;
        }
        #menu-container li ul {
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <h1>Admin Menu System</h1>
    <ul id="menu-container">
        <?php echo renderMenu($menu); ?>
    </ul>

    <button id="save-menu">Save Menu</button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            // Make the menu items sortable
            $("#menu-container").sortable({
                placeholder: "ui-state-highlight",
                update: function (event, ui) {
                    // Update the parent_id of each item
                    updateMenuStructure();
                }
            });

            // Save the menu structure
            $("#save-menu").click(function () {
                const menuData = getMenuStructure($("#menu-container"));
                console.log("Sending data:", menuData); // Debug the data being sent
                $.ajax({
                    url: "http://localhost/ci5/admin/menuorder/save-order",
                    method: "POST",
                    contentType: "application/json",
                    data: JSON.stringify(menuData),
                    headers: {
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": "<?= csrf_token() ?>"
                    },
                    success: function (response) {
                        console.log("Response:", response); // Debug the response
                        alert("Menu saved successfully!");
                    },
                    error: function (xhr, status, error) {
                        alert("Error saving menu: " + error);
                    }
                });
            });

            // Function to update the menu structure
            function updateMenuStructure() {
                const menuData = getMenuStructure($("#menu-container"));
                console.log(menuData); // For debugging
            }

            // Function to get the menu structure
            function getMenuStructure($element) {
                const menuData = [];
                $element.children("li").each(function () {
                    const item = {
                        id: $(this).data("id"),
                        parent_id: null,
                        children: []
                    };
                    if ($(this).children("ul").length > 0) {
                        item.children = getMenuStructure($(this).children("ul"));
                    }
                    menuData.push(item);
                });
                return menuData;
            }
        });
    </script>
</body>
</html>

<?php
/**
 * Recursively render the menu as HTML
 *
 * @param array $menu Nested menu structure
 * @return string HTML for the menu
 */
function renderMenu(array $menu): string
{
    $html = '';
    foreach ($menu as $item) {
        $html .= '<li data-id="' . $item['id'] . '">';
        $html .= '<span>' . $item['title'] . '</span>';
        if (!empty($item['children'])) {
            $html .= '<ul>';
            $html .= renderMenu($item['children']);
            $html .= '</ul>';
        }
        $html .= '</li>';
    }
    return $html;
}
?>