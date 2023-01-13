---
statblock: true
name: 'Crime Boss - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 6
ac: 15
hp: 127
hit_dice: '15d8 + 60'
speed: '30 ft.'
stats:
    - 18
    - 14
    - 18
    - 16
    - 16
    - 16
skillsaves:
    - { deception: 6 }
    - { insight: 6 }
    - { intimidation: 6 }
    - { perception: 6 }
    - { persuasion: 6 }
    - { stealth: 5 }
senses: 'passive Perception 16'
languages: 'any two'
actions:
    - { name: Multiattack, desc: 'The boss attacks three times with their shortsword.' }
    - { name: Shortsword, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 7 (1d6 + 4) piercing damage.' }
    - { name: Dagger, desc: 'Melee or Ranged Weapon Attack: +7 to hit, reach 5 ft. or range 20/60 ft., one target. Hit: 6 (1d4 + 4) piercing damage.' }
    - { name: 'Mark for Death', desc: 'The boss targets a creature within 30 feet that can see or hear them. For 1 minute or until the boss threatens a different target, the target takes an extra 7 (2d6) damage whenever the boss hits it with a weapon attack.' }
reactions:
    - { name: 'Command Bodyguard', desc: 'When the boss would be hit by an attack, they command an ally within 5 feet to use its reaction to switch places with the boss. The ally is hit by the attack instead of the boss.' }
    - { name: 'Offhand Dagger', desc: 'When missed by an attack, the boss makes a dagger attack.' }
    - { name: 'A crime boss has risen to the top of a criminal gang or guild', desc: "They're tough in a fight but too smart to do their own dirty work unless absolutely necessary." }

---
```statblock
monster: Crime Boss - A5E
```
