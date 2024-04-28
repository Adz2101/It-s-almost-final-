<?php if (basename($_SERVER['PHP_SELF']) === 'home.php' && !isset($_GET['home'])): ?>
        <div class="info" id="home-content">
                    <h1>Risk Management System</h1>
                    <p>Welcome to our Cyber Security Risk Management System. We provide innovative solutions to help organizations identify, assess, and mitigate cyber security risks effectively.</p>
                    <div class="feature">
                <i class="fas fa-shield-alt"></i>
                <h3>Risk Management</h3>
                <p>Our system helps you input potential risks within your organisation's network.</p>
            </div>
            <div class="feature">
                <i class="fas fa-tasks"></i>
                <h3>Mitigation Planning</h3>
                <p>Plan and implement mitigation strategies to reduce the likelihood and impact of cyber security incidents.</p>
            </div>
            <?php endif; ?>
    </div>
</div>