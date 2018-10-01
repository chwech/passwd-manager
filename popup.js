chrome.browserAction.setBadgeText({
  text: '1'
})

chrome.contextMenus.create({
  type: 'normal',
  title: '菜单1'
}, function callback() {
  console.log('创建菜单完成')
})

chrome.contextMenus.create({
  type: 'normal',
  title: '菜单2'
}, function callback() {
  console.log('创建菜单完成')
})

var notification = new Notification('你好', {
  icon:"images/icon.png",
  title:'hello world!', 
  message:"Talk is cheap. Show me the code!"
});
