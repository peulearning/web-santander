const notificationList = document.getElementById('notification-list');

// Função para adicionar uma notificação
function addNotification(message) {
  const notification = document.createElement('li');
  notification.textContent = message;
  notificationList.appendChild(notification);
}

// Exemplo de como adicionar uma notificação
addNotification('Você tem uma nova mensagem!');
addNotification('O seu pedido foi enviado com sucesso!');