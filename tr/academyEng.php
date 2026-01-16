<?php 
$lang = $_SESSION['lang'] ?? 'en';

$firstAccordionTitle = "Modern Aquaculture RAS Systems";
$secondAccordionTitle = "Plastic vs Steel Tanks: Why Choose Plastic?";

$blogArticles = [
    ['title' => 'Introduction to RAS Systems', 'file' => 'blog1e.php'],
    ['title' => 'Advantages of RAS in Modern Aquaculture', 'file' => 'blog2e.php'],
    ['title' => 'Designing Effective Filtration Systems', 'file' => 'blog3e.php'],
    ['title' => 'Importance of Water Quality in Aquaculture', 'file' => 'blog4e.php'],
    ['title' => 'Sustainable Aquaculture Practices', 'file' => 'blog5e.php'],
    ['title' => 'Future Trends in Recirculating Aquaculture', 'file' => 'blog6e.php'],
    ['title' => 'Mechanical Advantages of Plastic Tanks in Aquaculture Systems', 'file' => 'blog7e.php'],
    ['title' => 'Cost Efficiency of Plastic vs Steel Tanks', 'file' => 'blog8e.php'],
    ['title' => 'Durability and Maintenance Comparison', 'file' => 'blog9e.php'],
    ['title' => 'Custom Design Flexibility: Shaping Plastic Tanks for Specific Aquaculture Needs', 'file' => 'blog10e.php'],
    ['title' => 'Environmental Impact: Recycling and Sustainability of Plastic Tanks', 'file' => 'blog11e.php'],
    ['title' => 'Hygienic Design Considerations: Biofilm Prevention in Plastic Aquaculture Tanks', 'file' => 'blog12e.php'],
];

include 'Utils/header.php';
include 'Elements/navbar.php';
?>

<style>
  body { margin: 0; }
  nav { margin-bottom: 70px; }
  main { padding-top: 60px; }
  .accordion-item {
    border: 1px solid #ccc;
    margin-bottom: 12px;
    border-radius: 6px;
    background-color: #f1f4f8;
  }
  .accordion-item:first-of-type {
    margin-top: 40px;
  }
  .accordion-header {
    background: #dde2e8;
    padding: 15px 20px;
    cursor: pointer;
    font-weight: 600;
    border-radius: 6px 6px 0 0;
    user-select: none;
  }
  .accordion-content {
    padding: 20px;
    display: none;
    background: #ffffff;
    border-top: 1px solid #ccc;
    border-radius: 0 0 6px 6px;
  }
</style>


<main class="max-w-screen-xl mx-auto px-6 py-8">
  <h1 class="text-3xl font-bold mb-6">CEKA Academy</h1>

  <!-- İlk Ana Akordiyon -->
  <div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion('accordion1')">
      <?= htmlspecialchars($firstAccordionTitle) ?>
    </div>
    <div id="accordion1" class="accordion-content">
      <?php 
        for ($i = 0; $i < 6; $i++) {
          echo "<div class='accordion-item' style='margin-bottom:10px;'>";
          echo "<div class='accordion-header' onclick=\"toggleSubAccordion('subaccordion$i')\">";
          echo htmlspecialchars($blogArticles[$i]['title']);
          echo "</div>";
          echo "<div id='subaccordion$i' class='accordion-content'>";
          include __DIR__ . "/academyfiles/" . $blogArticles[$i]['file'];
          echo "</div></div>";
        }
      ?>
    </div>
  </div>

  <!-- İkinci Ana Akordiyon -->
  <div class="accordion-item mt-8">
    <div class="accordion-header" onclick="toggleAccordion('accordion2')">
      <?= htmlspecialchars($secondAccordionTitle) ?>
    </div>
    <div id="accordion2" class="accordion-content">
      <?php 
        for ($j = 6; $j < count($blogArticles); $j++) {
          echo "<div class='accordion-item' style='margin-bottom:10px;'>";
          echo "<div class='accordion-header' onclick=\"toggleSubAccordion('subaccordion$j')\">";
          echo htmlspecialchars($blogArticles[$j]['title']);
          echo "</div>";
          echo "<div id='subaccordion$j' class='accordion-content'>";
          include __DIR__ . "/academyfiles/" . $blogArticles[$j]['file'];
          echo "</div></div>";
        }
      ?>
    </div>
  </div>
</main>

<script>
function toggleAccordion(id) {
  const allAccordions = document.querySelectorAll('main > .accordion-item > .accordion-content');
  allAccordions.forEach(acc => acc.style.display = 'none');

  const el = document.getElementById(id);
  if (el) el.style.display = 'block';

  // Kapalıyken açıldığında tüm alt başlıklar kapatılsın
  const allSubAccordions = document.querySelectorAll('.accordion-content .accordion-content');
  allSubAccordions.forEach(sub => sub.style.display = 'none');
}

function toggleSubAccordion(id) {
  const allSubAccordions = document.querySelectorAll('.accordion-content .accordion-content');
  allSubAccordions.forEach(sub => {
    if (sub.id !== id) sub.style.display = 'none';
  });

  const el = document.getElementById(id);
  if (el) el.style.display = (el.style.display === 'block') ? 'none' : 'block';
}
</script>

<?php include 'Elements/footer.php'; ?>