import java.io.File;

import org.junit.jupiter.api.*;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;


// Harmit Singh
class CEtesting2 {

	private WebDriver driver;
	
	@BeforeEach
	void setup() {
		File file = new File("/Users/Harry/Desktop/chromedriver");
		System.setProperty("webdriver.chrome.driver", file.getAbsolutePath());
		driver = new ChromeDriver();
		driver.get("http://ec2-54-210-100-190.compute-1.amazonaws.com/index.php");
	}
	
	// base case
	@Test
	void loginTest1() throws InterruptedException {
		WebElement login = driver.findElement(By.cssSelector("#bs-example-navbar-collapse-1 > ul.nav.navbar-nav.navbar-right > li:nth-child(2) > a"));
		Thread.sleep(1000);
		login.click();
		login = driver.findElement(By.id("enterMasonNetID"));
		login.sendKeys("Hsingh20");
		Thread.sleep(1000);
		login = driver.findElement(By.id("enterPassword"));
		login.sendKeys("PASSWORD1!@");
		Thread.sleep(1000);
		driver.close();
	}
	
	// submission
	@Test
	void loginTest2() throws InterruptedException {
		WebElement login = driver.findElement(By.cssSelector("#bs-example-navbar-collapse-1 > ul.nav.navbar-nav.navbar-right > li:nth-child(2) > a"));
		Thread.sleep(1000);
		login.click();
		login = driver.findElement(By.id("enterMasonNetID"));
		login.sendKeys("Hsingh20");
		Thread.sleep(1000);
		login = driver.findElement(By.id("enterPassword"));
		login.sendKeys("PASSWORD1!@");
		Thread.sleep(1000);
		login = driver.findElement(By.id("submitform"));
		login.click();
		driver.close();
	}
	

}
