<?php
echo "<h4> Practice Exercises 3</h4>";
echo "<h5> 1. Create a function to add a new business listing.
 The function should take business name, category, and location as parameters 
 and return a confirmation message.</h5>";
// 1. Function to add a new business listing
function addBusiness($name, $category, $location) {
    return "Business '$name' in category '$category' located at '$location' has been added successfully.";
}

// Example usage of the addBusiness function
$name = "sosi";
$category = "student";
$location = "Addis Ababa";

echo addBusiness($name, $category, $location);

// 2. Function to search for businesses by category
echo "<h5> 2. Write a function to search for businesses by category.
 The function should accept a category as an argument and return a filtered list of businesses.</h5>";
$businesses = [
    ['id' => 1, 'name' => 'Business A', 'category' => 'Retail', 'location' => 'City A'],
    ['id' => 2, 'name' => 'Business B', 'category' => 'Food', 'location' => 'City B'],
    ['id' => 3, 'name' => 'Business C', 'category' => 'Retail', 'location' => 'City A'],
    ['id' => 4, 'name' => 'Business D', 'category' => 'Tech', 'location' => 'City C'],
    ['id' => 5, 'name' => 'Business E', 'category' => 'Food', 'location' => 'City B'],
];
function searchBusinessesByCategory($category, $businesses) {
    $filtered = array_filter($businesses, function($business) use ($category) {
        return $business['category'] === $category;
    });
    return $filtered;
}

// 3. Function to calculate the number of businesses per city
function countBusinessesPerCity($businesses) {
    $cityCounts = [];
    foreach ($businesses as $business) {
        $city = $business['location'];
        if (!isset($cityCounts[$city])) {
            $cityCounts[$city] = 0;
        }
        $cityCounts[$city]++;
    }
    return $cityCounts;
}

// 4. Function to update business information
function updateBusiness(&$businesses, $id, $updatedDetails) {
    foreach ($businesses as &$business) {
        if ($business['id'] === $id) {
            $business = array_merge($business, $updatedDetails);
            return "Business with ID $id has been updated.";
        }
    }
    return "Business with ID $id not found.";
}

// 5. Function to modify a business listing by reference
function modifyBusinessListing(&$business, $newDetails) {
    $business = array_merge($business, $newDetails);
    return "Business listing has been modified.";
}

/*
2. Write a function to search for businesses by category – The function should accept a category as
an argument and return a filtered list of businesses.
3. Implement a function to calculate the number of businesses per city – Use an array to store
businesses and group them by city.
4. Develop a function to update business information – The function should accept a business ID
and an associative array of updated details.
5. Pass business data by reference to optimize memory usage – Modify a business listing inside a
function using reference arguments.

*/
?>