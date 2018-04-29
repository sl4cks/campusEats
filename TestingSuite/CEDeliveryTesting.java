import java.io.File;

import org.junit.jupiter.api.*;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;

// Josh Westhoven
class DeliveryForm {

	private WebDriver driver;
	
	@BeforeEach
	void setup() {
		File file = new File("/Users/Harry/Desktop/chromedriver");
		System.setProperty("webdriver.chrome.driver", file.getAbsolutePath());
		driver = new ChromeDriver();
		driver.get("http://ec2-54-210-100-190.compute-1.amazonaws.com/deliveryForm.php");
	}

	@Test
	void deliveryFormTest1() throws InterruptedException {
		WebElement check = driver.findElement(By.id("check1"));
		Thread.sleep(1000);
		check.click();
		Thread.sleep(1000);
		check.click();
		Thread.sleep(1000);
		WebElement submit = driver.findElement(By.id("submitform"));
		check.click();
		submit.click();
		Thread.sleep(1000);
		driver.close();
	}
	
	@Test
	void deliveryFormTest2() throws InterruptedException {
		Thread.sleep(1000);
		WebElement logout = driver.findElement(By.linkText("Log Out"));
		logout.click();
		Thread.sleep(1000);
		driver.close();
	}

	@Test
	void deliveryFormTest3() throws InterruptedException {
		Thread.sleep(1000);
		WebElement report = driver.findElement(By.linkText("Report Problem"));
		report.click();
		Thread.sleep(1000);
		driver.close();
	}
	
	@Test
	void deliveryFormTest4() throws InterruptedException {
		Thread.sleep(1000);
		WebElement home = driver.findElement(By.linkText("Campus Eats"));
		home.click();
		Thread.sleep(1000);
		driver.close();
	}

}
