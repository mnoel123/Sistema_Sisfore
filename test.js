const { Builder, By, Key, until } = require('selenium-webdriver');

async function exampleTest() {
    // Inicializar el navegador
    let driver = await new Builder().forBrowser('chrome').build();
    
    try {
        // Abrir una página web
        await driver.get('https://www.example.com');
        
        // Realizar acciones en la página web (hacer clic en enlaces, llenar formularios, etc.)
        
        // Ejemplo: Hacer clic en un enlace con texto 'About'
        await driver.findElement(By.linkText('About')).click();
        
        // Esperar a que se cargue una página con un título específico
        await driver.wait(until.titleIs('About Us'), 5000);
        
        // Ejemplo: Llenar un formulario
        await driver.findElement(By.id('username')).sendKeys('usuario');
        await driver.findElement(By.id('password')).sendKeys('contraseña', Key.RETURN);
        
        // Esperar a que un elemento esté presente en la página
        await driver.wait(until.elementLocated(By.css('.success-message')), 5000);
        
    } finally {
        // Cerrar el navegador al finalizar la prueba
        await driver.quit();
    }
}

// Llamar a la función de prueba
exampleTest();
