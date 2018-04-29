import java.io.File;

import org.junit.jupiter.api.*;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;

class CEProblemRepTesting {

	private WebDriver driver;
	
	@BeforeEach
	void setup() {
		File file = new File("/Users/Harry/Desktop/chromedriver");
		System.setProperty("webdriver.chrome.driver", file.getAbsolutePath());
		driver = new ChromeDriver();
		driver.get("http://ec2-54-210-100-190.compute-1.amazonaws.com");
	}

	// sample report test
	@Test
	void problemRepTesting1() throws InterruptedException {
		WebElement reporter = driver.findElement(By.xpath("//*[@id=\"orderNumber\"]"));
		reporter.click();
		Thread.sleep(1000);
		reporter.sendKeys("This is my order number");
		Thread.sleep(1000);
		reporter = driver.findElement(By.xpath("//*[@id=\"problemdescription\"]"));
		reporter.click();
		Thread.sleep(1000);
		reporter.sendKeys("This is my report for this guy ouch");
		reporter = driver.findElement(By.xpath("//*[@id=\"submitform\"]"));
		Thread.sleep(1000);
		reporter.click();
		driver.close();
	}
	
	// go home test
	@Test
	void problemRepTesting2() throws InterruptedException{
		WebElement reporter = driver.findElement(By.xpath("/html/body/nav/div/div[1]/a"));
		Thread.sleep(1000);
		reporter.click();
		driver.close();
	}
	
	// about test
	@Test
	void problemRepTesting3() throws InterruptedException {
		WebElement reporter = driver.findElement(By.xpath("//*[@id=\"bs-example-navbar-collapse-1\"]/ul[1]/li/a"));
		Thread.sleep(1000);
		reporter.click();
		driver.close();
	}
	
	
	// log out test
	@Test
	void problemRepTesting4() throws InterruptedException {
		WebElement reporter = driver.findElement(By.xpath("///*[@id=\"bs-example-navbar-collapse-1\"]/ul[2]/li/a"));
		Thread.sleep(1000);
		reporter.click();
		driver.close();
	}
	
}
