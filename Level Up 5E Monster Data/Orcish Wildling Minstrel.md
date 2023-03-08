---
statblock: true
name: 'Orcish Wildling Minstrel'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 2
ac: 15
hp: 32
hit_dice: '5d8 + 10'
speed: '30 ft.'
stats:
    - 10
    - 16
    - 14
    - 12
    - 12
    - 16
saves:
    - { dexterity: 5 }
    - { charisma: 5 }
skillsaves:
    - { deception: 5 }
    - { performance: 5 }
    - { persuasion: 5 }
    - { history: 3 }
    - { nature: 3 }
    - { survival: 3 }
senses: 'passive Perception 11'
languages: 'any three'
traits:
    - { name: 'Legend lore', desc: 'Once every 30 days, the orcish wilding minstrel can innately cast legend lore with no material component.' }
spells:
    spells: ['The minstrel is a 5th level spellcaster. Their spellcasting ability is Charisma (spell save DC 13, +5 to hit with spell attacks). They have the following bard spells prepared:', 'Cantrips (at will): light, mage hand, minor illusion, vicious mockery', '1st-level (4 slots): charm person, disguise self, healing word', '2nd-level (3 slots): enthrall, invisibility, shatter', '3rd-level (2 slots): hypnotic pattern, major image']
actions:
    - { name: Rapier, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 7 (1d8 + 3) piercing damage.' }
    - { name: 'Vicious Mockery (Cantrip; V)', desc: 'A creature within 60 feet that can hear the minstrel makes a DC 14 Wisdom saving throw. On a failure, it takes 7 (2d6) psychic damage and has disadvantage on the first attack roll it makes before the end of its next turn.' }
    - { name: 'Invisibility (2nd-Level; V, S, M, Concentration)', desc: 'The minstrel or a creature they touch is invisible for 1 hour. The spell ends if the invisible creature attacks or casts a spell.' }
    - { name: 'Shatter (2nd-Level; V, S, M)', desc: 'An ear-splitting ringing sound fills a 10-foot-radius sphere emanating from a point the minstrel can see within 60 feet. Creatures in the area make a DC 14 Constitution saving throw, taking 13 (3d8) thunder damage on a failed save or half damage on a success. A creature made of stone, metal, or other inorganic material has disadvantage on its saving throw. Unattended objects in the area also take the damage.' }
    - { name: 'Hypnotic Pattern (3rd-Level; S, M, Concentration)', desc: 'A swirling pattern of light appears at a point within 120 feet. Each creature within 10 feet of the pattern that can see it makes a DC 14 Wisdom saving throw. On a failure, the creature is charmed for 1 minute. While charmed, the creature is incapacitated and its Speed is 0. The effect ends on a creature if it takes damage or if another creature uses an action to shake it out of its daze.' }
'bonus actions':
    - { name: 'Martial Encouragement', desc: "Until the beginning of the minstrel's next turn, one creature within 30 feet that can hear the minstrel deals an extra 3 (1d6) damage whenever it deals weapon damage." }
    - { name: 'Healing Word (1st-Level; V)', desc: "The minstrel or a living creature within 60 feet regains 5 (1d4 + 3) hit points. The minstrel can't cast this spell and a 1st-level or higher spell on the same turn." }
    - { name: 'Many orc tribes use song to preserve a communal memory of history, geography, and the rhythms of nature', desc: "Minstrels are the keepers of the tribes' wisdom and identity." }

---
```statblock
monster: Orcish Wildling Minstrel
```
