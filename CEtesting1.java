import java.io.File;

import org.junit.jupiter.api.*;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;

class CEtesting1 {
	
	private WebDriver driver;
	
	@BeforeEach
	void setup() {
		File file = new File("/Users/Harry/Desktop/chromedriver");
		System.setProperty("webdriver.chrome.driver", file.getAbsolutePath());
		driver = new ChromeDriver();
		driver.get("http://campuseats.s3-website-us-east-1.amazonaws.com/index.html");
	}
	
	@Test
	void retHomepageTest1() throws InterruptedException {
		WebElement gohome = driver.findElement(By.linkText("Campus Eats"));
		Thread.sleep(1000);
		gohome.click();
		Thread.sleep(1000);
		driver.close();
	}
	
	@Test
	void retHomepageTest2() throws InterruptedException {
		WebElement gohome = driver.findElement(By.linkText("About"));
		Thread.sleep(1000);
		gohome.click();
		Thread.sleep(1000);
		gohome = driver.findElement(By.linkText("Home"));
		Thread.sleep(1000);
		gohome.click();
		driver.close();
	}
	
	@Test
	void retHomepageTest3() throws InterruptedException {
		WebElement gohome = driver.findElement(By.linkText("About"));
		Thread.sleep(1000);
		gohome.click();
		Thread.sleep(1000);
		gohome = driver.findElement(By.linkText("Campus Eats"));
		Thread.sleep(1000);
		gohome.click();
		driver.close();
	}
}
