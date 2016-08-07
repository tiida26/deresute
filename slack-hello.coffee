module.exports = (robot) ->
  robot.respond /(\d+)/i, (msg) ->
    username = msg.message.user.name
    point = msg.match[1]
    @exec = require('child_process').exec
    command = "sh /home/tiida/anbot/data_transfer.sh #{username} #{point}"
    msg.send "ポイントをうけとりましたよ！がんばります！"
    @exec command, (error, stdout, stderr) ->
      msg.send error if error?
      msg.send stdout if stdout?
      msg.send stderr if stderr?
