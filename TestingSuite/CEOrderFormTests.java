//import static org.junit.Assert.*;
import java.io.File;
import org.junit.jupiter.api.*;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;

import org.junit.jupiter.api.BeforeAll;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;

public class OrderFormTests {

	private WebDriver driver;
	
	@BeforeEach
	void setup() {
		System.setProperty("webdriver.chrome.driver", "\\Users\\Alison\\Desktop\\selenium-java-3.11.0\\chromedriver.exe");
		driver = new ChromeDriver();
		driver.get("http://ec2-54-210-100-190.compute-1.amazonaws.com/orderForm.php");
	}
	
	@Test
	void fillForm() throws InterruptedException {
		WebElement name = driver.findElement(By.id("orderName"));
		WebElement orderLocation = driver.findElement(By.id("orderLocation"));
		WebElement deliveryLocation = driver.findElement(By.id("deliveryLocation"));
		WebElement comments = driver.findElement(By.id("comments"));
		WebElement submit = driver.findElement(By.id("submitform"));
		
		Thread.sleep(1000);
		name.sendKeys("George Mason");
		Thread.sleep(1000);
		orderLocation.sendKeys("JC");
		Thread.sleep(1000);
		deliveryLocation.sendKeys("Engineering Building");
		Thread.sleep(1000);
		comments.sendKeys("Please make sure they included a fork");
		Thread.sleep(1000);
		submit.click();
		Thread.sleep(1000);
		// all required fields filled, should be able to submit form
		driver.close();
	}
	
	@Test
	void missingRequiredField() throws InterruptedException {
		WebElement name = driver.findElement(By.id("orderName"));
		WebElement orderLocation = driver.findElement(By.id("orderLocation"));
		WebElement deliveryLocation = driver.findElement(By.id("deliveryLocation"));
		WebElement comments = driver.findElement(By.id("comments"));
		WebElement submit = driver.findElement(By.id("submitform"));
		
		Thread.sleep(1000);
		name.sendKeys("George Mason");
		Thread.sleep(1000);
		// purposely missing order location, should not be able to submit form without it
		Thread.sleep(1000);
		deliveryLocation.sendKeys("Engineering Building");
		Thread.sleep(1000);
		comments.sendKeys("Please make sure they included a fork");
		Thread.sleep(1000);
		submit.click();
		Thread.sleep(1000);
		driver.close();
	}
	
	@Test
	void navigateAbout() throws InterruptedException {
		WebElement about = driver.findElement(By.linkText("About"));
		Thread.sleep(1000);
		about.click();
		Thread.sleep(1000);
		driver.close();
	}
	
	@Test
	void navigateReportProblem() throws InterruptedException {
		WebElement problem = driver.findElement(By.linkText("Report Problem"));
		Thread.sleep(1000);
		problem.click();
		Thread.sleep(1000);
		driver.close();
	}
	
	@Test
	void navigateHome() throws InterruptedException {
		WebElement home = driver.findElement(By.linkText("Campus Eats"));
		Thread.sleep(1000);
		home.click();
		Thread.sleep(1000);
		driver.close();
	}
	
	@Test
	void navigateLogOut() throws InterruptedException {
		WebElement logOut = driver.findElement(By.linkText("Log Out"));
		Thread.sleep(1000);
		logOut.click();
		Thread.sleep(1000);
		driver.close();
	}
}
