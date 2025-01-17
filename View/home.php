<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VisB</title>

</head>

<body>
    <main>
        <div class="fake-body">
            <div class="container">
                <div class="header">
                    <p class="titlu">Visualizer for BMI</p>
                </div>

                <div class="bara">
                    <nav class="navbar">
                        <ul>
                            <li><a href="/VisB-Visualizer-for-BMI/">Home</a></li>
                            <li><a href="/VisB-Visualizer-for-BMI/statistics">Statistics</a></li>
                            <li><a href="/VisB-Visualizer-for-BMI/comparison">Comparison</a></li>
                            <li><a href="/VisB-Visualizer-for-BMI/visualization">Visualization</a></li>
                            <li><a href="/VisB-Visualizer-for-BMI/contact">Contact</a></li>
                            <li><a href="/VisB-Visualizer-for-BMI/login">Login</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Responsive Menu -->
                <div id="responsive-menu-container" class="responsive-menu-container">
                    <div id="responsive-menu-bar" class="responsive-menu-bar">
                        <span>Menu</span>
                    </div>
                    <div id="responsive-menu">
                        <ul id="primary-menu">
                            <li><a href="/VisB-Visualizer-for-BMI/">Home</a></li>
                            <li><a href="/VisB-Visualizer-for-BMI/statistics">Statistics</a></li>
                            <li><a href="/VisB-Visualizer-for-BMI/comparison">Comparison</a></li>
                            <li><a href="/VisB-Visualizer-for-BMI/visualization">Visualization</a></li>
                            <li><a href="/VisB-Visualizer-for-BMI/contact">Contact</a></li>
                            <li><a href="/VisB-Visualizer-for-BMI/login">Login</a></li>
                        </ul>
                        <div id="menu-close-bar" class="menu-close-bar"> Close</div>
                    </div>
                </div>


                <div class="partition1">
                    <p class="description1">Body Mass Index (BMI) is a screening tool that uses height and weight to
                        estimate a person's leanness or corpulence, as it is intended to quantify tissue mass. It is
                        widely
                        used as a general indicator of whether a person has a healthy body weight for their height.
                        Specifically, the resulting BMI score is used to categorize whether a person is underweight,
                        normal
                        weight, overweight, or obese based on predefined ranges. </p>
                    <p class="description2">These ranges of BMI vary based on factors such as region and age, and are
                        sometimes further divided into subcategories such as severely underweight or very severely
                        obese.
                        Both underweight and overweight conditions can have health consequences. While BMI is an
                        imperfect
                        measure of healthy body weight, it is a useful indicator of whether any additional testing or
                        action
                        is required. Refer to the tables below the calculator to see the different categories based on
                        BMI
                        that are used by the calculator.</p>
                </div>

                <div class="partition2">
                    <div class="calculator">
                        <h2>BMI Calculator</h2>

                        <div class="calculator_data">
                            <div class="unit-title">Unit Measurement:</div>
                            <button id="metricButton" type="button" class="selected">Metric</button>
                            <button id="usButton" type="button">US / English</button>
                        </div>

                        <form id="Form" method="post">
                            <div class="metric-form">
                                <label for="height">Height (cm):</label>
                                <input type="number" id="height" name="height" min="80" max="250"
                                    placeholder="Enter your height">

                                <label for="weight">Weight (kg):</label>
                                <input type="number" id="weight" name="weight" min="11" max="300"
                                    placeholder="Enter your weight">

                                <button type="submit" name="submit-metric">Submit</button>
                            </div>

                            <div class="us-form" style="display: none;">
                                <label for="height-inches">Height (inches):</label>
                                <input type="number" id="height-inches" name="height-inches" min="32" max="100"
                                    placeholder="Enter your height">

                                <label for="weight-lbs">Weight (lbs):</label>
                                <input type="number" id="weight-lbs" name="weight-lbs" min="22" max="660"
                                    placeholder="Enter your weight">

                                <button type="submit" name="submit-us">Submit</button>
                            </div>
                        </form>
                    </div>

                    <div class="indicator">
                        <div class="indicator-drawing">

                        </div>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            require 'Model/CalculatorBMI.php';
                            $calculator = new CalculatorBMI();
                            $bmi = '';
                            $weight = '';
                            $height = '';
                            $unit = '';

                            if (isset($_POST['submit-metric'])) {
                                $weight = $_POST['weight'] ?? null;
                                $height = $_POST['height'] ?? null;

                                if ($weight && $height) {
                                    $bmi = $calculator->MetricBMI($weight, $height);
                                    $unit = 'metric';
                                } else {
                                    echo "Please provide both weight and height.";
                                }
                            } elseif (isset($_POST['submit-us'])) {
                                $weight_us = $_POST['weight-lbs'] ?? null;
                                $height_us = $_POST['height-inches'] ?? null;

                                if ($weight_us && $height_us) {
                                    $bmi = $calculator->UsBMI($weight_us, $height_us);
                                    $weight = $weight_us;
                                    $height = $height_us;
                                    $unit = 'us';
                                } else {
                                    echo "Please provide both weight and height.";
                                }
                            }

                            if ($bmi) {
                                $calculator->generateBMIIndicator($bmi, $weight, $height, $unit);
                            }
                        }
                        ?>
                    </div>
                </div>


                <div class="partition3">
                    <div class="adults">
                        <h3>BMI table for Adults, age 20 or older</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Classification</th>
                                    <th>BMI Range (kg/m²)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Severe Thinness</td>
                                    <td>&lt; 16</td>
                                </tr>
                                <tr>
                                    <td>Moderate Thinness</td>
                                    <td>16 - 17</td>
                                </tr>
                                <tr>
                                    <td>Mild Thinness</td>
                                    <td>17 - 18.5</td>
                                </tr>
                                <tr>
                                    <td>Normal</td>
                                    <td>18.5 - 25</td>
                                </tr>
                                <tr>
                                    <td>Overweight</td>
                                    <td>25 - 30</td>
                                </tr>
                                <tr>
                                    <td>Obese Class I</td>
                                    <td>30 - 35</td>
                                </tr>
                                <tr>
                                    <td>Obese Class II</td>
                                    <td>35 - 40</td>
                                </tr>
                                <tr>
                                    <td>Obese Class III</td>
                                    <td>&gt; 40</td>
                                </tr>
                            </tbody>
                        </table>
                        <h5>Source: World Health Organization (WHO)</h5>
                    </div>

                    <div class="children">
                        <h3>BMI table for children and teens, age 2-19</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Percentile Range</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Underweight</td>
                                    <td>&lt; 16% </td>
                                </tr>
                                <tr>
                                    <td>Healthy weight</td>
                                    <td> 5% - 85% </td>
                                </tr>
                                <tr>
                                    <td>At risk of overweight</td>
                                    <td> 85% - 95% </td>
                                </tr>
                                <tr>
                                    <td>Overweight</td>
                                    <td>&gt; 95%</td>
                                </tr>
                            </tbody>
                        </table>
                        <h5>Source: Centers for Disease Control and Prevention (CDC)</h5>
                    </div>
                </div>

                <div class="formule">
                    <h2>BMI Formula</h2>
                    <p>Below are the equations used for calculating Body Mass Index (BMI) in the International System of
                        Units (SI) and the US customary system (USC) using a 5'10", 160-pound individual as an example:
                    </p>
                    <br>
                    <h3>USC Units:</h3>
                    <p>BMI = 703 * mass (lbs) / height<sup>2</sup> (in) = 703 * 160 / 70<sup>2</sup> = 22.96
                        kg/m<sup>2</sup></p>
                    <h3>SI, Metric Units:</h3>
                    <p>BMI = mass (kg) / height<sup>2</sup> (m) = 72.5 / 1.78<sup>2</sup> = 22.90 kg/m<sup>2</sup></p>
                </div>

            </div>

            <footer>
            </footer>

        </div>

    </main>

    <script type='text/javascript' src='main.js'></script>
</body>

</html>