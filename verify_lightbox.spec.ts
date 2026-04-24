import { test, expect } from '@playwright/test';

test('verify lightbox is above navbar', async ({ page }) => {
  await page.goto('http://localhost:8000/product.php');

  // Wait for images to load
  await page.waitForSelector('.product_container .box a');

  // Click first image to open lightbox
  await page.click('.product_container .box a:first-child');

  // Wait for lightbox to appear
  await page.waitForSelector('.lb-outerContainer', { state: 'visible' });

  // Take screenshot
  await page.screenshot({ path: '/home/jules/verification/lightbox_zindex.png' });

  // Check if lightbox overlay is visible
  const overlay = page.locator('.lightboxOverlay');
  await expect(overlay).toBeVisible();
});
